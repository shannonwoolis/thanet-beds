<?php


namespace PGMB\Components;

use PGMB\API\CachedGoogleMyBusiness;
use PGMB\Google\NormalizeLocationName;

class BusinessSelector {
	protected $api;
	protected $field_name = 'mbp_selected_location';
	protected $default_location;
	protected $selected;
	protected $flush_cache;

	public function __construct(CachedGoogleMyBusiness $api) {
		$this->api                 = $api;
	}

	/**
	 * Return the main component of the business selector
	 *
	 * @return string
	 */
	public function generate(){
		if(!$this->selected){
			$this->selected = $this->default_location;
		}
		return "<div class=\"mbp-business-selector\"><table>{$this->account_rows()}</table></div>";
	}

	protected function load_accounts(){
		$accounts = get_option('pgmb_accounts');
		if(!$accounts || !is_array($accounts)){
			return false;
		}

		if(!current_user_can('pgmb_see_others_accounts')){
			foreach($accounts as $id => $account){
				if(isset($account['owner']) && $account['owner'] != get_current_user_id()){
					unset($accounts[$id]);
				}
			}
		}

		if(empty($accounts)){
			return false;
		}

		return apply_filters('mbp_business_selector_google_accounts', $accounts);
	}

	protected function account_rows(){
		$accounts = $this->load_accounts();
		if(!is_array($accounts)){
			return $this->notice_row(__('No Google account connected', 'post-to-google-my-business'));
		}

		$account_data = reset($accounts);
		$key = key($accounts);

		return sprintf(
			"<tbody data-account_id='%s'><tr><th colspan='2'>%s %s</th></tr></tbody>",
			$key,
			$account_data['email'],
			$this->group_rows($key)
		);
	}

//	public static function draw(APIInterface $api, $field_name = 'mbp_selected_location', $selected = false, $default_location = false, $multiple = false){
//		$component = new static($api);
//		$component->set_field_name($field_name);
//		$component->set_selected_locations($selected);
//		$component->set_default_location($default_location);
//		$component->enable_multiple($multiple);
//		echo $component->location_blocked_info();
//		echo $component->generate();
//		echo $component->business_selector_controls();
//	}

	/**
	 * Display a notice/error message in the main business selector component
	 *
	 * @param string $message - Notice/error message
	 *
	 * @return string
	 */
	protected function notice_row($message){
		return sprintf( "<tr><td colspan=\"2\">%s</td></tr>", $message );
	}

	/**
	 * Return table rows containing the groups within the Google account
	 *
	 * @param string $account_key
	 *
	 * @return string Collection of table rows
	 */
	protected function group_rows($account_key){
		try{
			$this->api->set_user_id($account_key);
			$accounts = $this->api->list_accounts( $this->flush_cache );
		}catch(\Exception $exception){
			return $this->notice_row(sprintf(__('Could not retrieve account or location groups from Google My Business: %s', 'post-to-google-my-business'), $exception->getMessage()));
		}

		if(!is_object($accounts) || count($accounts->accounts) < 1) {
			return $this->notice_row(__('No user account or location groups found. Did you log in to the correct Google account?', 'post-to-google-my-business'));
		}

		$rows = '';
		$accounts->accounts = apply_filters('mbp_business_selector_groups', $accounts->accounts, $account_key);
		foreach($accounts->accounts as $account){
			$rows .= sprintf( "<tr><td colspan=\"2\"><strong>%s</strong></td></tr>", $account->accountName );
			$rows .= $this->location_rows($account_key, $account->name);
		}
		return $rows;
	}

	/**
	 * Return table rows containing GMB locations within a group
	 *
	 * @param $account_key
	 * @param $account_name - Google account ID
	 *
	 * @return string Collection of table rows
	 */
	protected function location_rows($account_key, $account_name){
		try{
			$nextPageToken = null;
			$locations = [];
			$readMask = 'name,title,storefrontAddress,metadata,serviceArea';
			do {
				$response = $this->api->list_locations($account_name, null, $nextPageToken, null, null, $readMask, $this->flush_cache);
				$locations = isset($response->locations) && is_array($response->locations) ? array_merge($locations, $response->locations) : $locations;
				$nextPageToken = isset($response->nextPageToken) ? $response->nextPageToken : null;
			}while($nextPageToken);

		}catch(\Exception $exception) {
			return $this->notice_row(sprintf(__('Could not retrieve locations from Google My Business: %s', 'post-to-google-my-business'), $exception->getMessage()));
		}

		if (!is_array( $locations ) || empty( $locations ) ) {
			return $this->notice_row(__('No businesses found.', 'post-to-google-my-business'));
		}

		$rows = '';

		/**
		 * Filter Business selector locations
		 *
		 * Allows altering the GMB locations which are displayed in the business location selector
		 *
		 * @since 2.3.0
		 *
		 * @param object $locations
		 * @param string $account_name
		 *
		 * @url https://developers.google.com/my-business/reference/rest/v4/accounts.locations/list
		 */
		$locations = apply_filters('mbp_business_selector_locations', $locations, $account_name, $account_key);
		foreach ( $locations as $location ) {
			//$disabled = false; //Todo: Temporary due to covid-19  //isset($location->locationState->isLocalPostApiDisabled) && $location->locationState->isLocalPostApiDisabled;
			//$disabled = !isset($location->locationState->isVerified) || !$location->locationState->isVerified || !isset($location->locationState->isPublished) || !$location->locationState->isPublished;
			/**
			 * $location->metadata->canOperateLocalPost should indicate whether localposts can be used but the variable isn't sent by Google regardless of the permission
			 */
			$disabled = !isset($location->metadata->hasVoiceOfMerchant) || !$location->metadata->hasVoiceOfMerchant;
			$normalized_name = NormalizeLocationName::from_without_account($location->name, $account_key)->with_account_id();
			$checked = isset($this->selected[$account_key]) && (is_array($this->selected[$account_key]) && in_array($normalized_name, $this->selected[$account_key]) || $normalized_name == $this->selected[$account_key]);

			$rows .= sprintf( '<tr class="mbp-business-item%s">', $disabled ? ' mbp-business-disabled' : '' );

			$rows .= '<td class="mbp-checkbox-container">'.$this->get_input($account_key, $location, $checked, $disabled).'</td>';

			$rows .= $this->location_data_column($location);

			$rows .= '</tr>';
		}
		return $rows;
	}

	protected function get_input($account_key, $location, $checked, $disabled){
		return sprintf(
			'<input type="radio" name="%s[%s]"  value="%s"%s%s>',
			esc_attr($this->field_name),
			esc_attr($account_key),
			NormalizeLocationName::from_without_account(esc_attr($location->name), $account_key)->with_account_id(),
			disabled($disabled, true, false),
			checked($checked, true, false)
		);
	}

	protected function location_data_column($location) {

		$isServiceArea = false;
		$hasAddress = true;

		if(isset($location->serviceArea->businessType)){
			switch($location->serviceArea->businessType){
				case 'CUSTOMER_LOCATION_ONLY':
					$hasAddress = false;
					$isServiceArea = true;
					break;
				case 'CUSTOMER_AND_BUSINESS_LOCATION':
					$hasAddress = true;
					$isServiceArea = true;
					break;
				case 'BUSINESS_TYPE_UNSPECIFIED':
				default:
			}
		}

		$addressLines = '';
		if($isServiceArea){
			$addressLines .= esc_html__('Service Area Business', 'post-to-google-my-business');
		}

		if($isServiceArea && $hasAddress){
			$addressLines .= ' - ';
		}

		if($hasAddress){
			if(isset($location->storefrontAddress->addressLines)){
				$addressLines = implode(' - ', (array)$location->storefrontAddress->addressLines);
			}
			if(isset($location->storefrontAddress->postalCode)){
				$addressLines .= ' - '.$location->storefrontAddress->postalCode;
			}
			if(isset( $location->storefrontAddress->locality )){
				$addressLines .= ' '.$location->storefrontAddress->locality;
			}
		}

		return sprintf(
	"<td class=\"mbp-info-container\">
				<label for=\"%s\">
					<strong>%s</strong><br />
					<a href=\"%s\" target=\"_blank\">
						<span class=\"mbp-address\">
							%s
						</span> 
					</a>
				</label>
			</td>",
			$location->name,
			$location->title,
			isset( $location->metadata->mapsUri ) ? $location->metadata->mapsUri : '',
			$addressLines
		);
	}

	public function location_blocked_info(){
		return sprintf("				
			<div class=\"mbp-info mbp-location-blocked-info\">
				<strong>%s</strong>
				%s
				<a href=\"https://posttogmb.com/localpostapiblocked\" target=\"_blank\">%s</a>
			</div>
		",
			__('Location grayed out?', 'post-to-google-my-business'),
			__('It means the location is blocked from using the LocalPostAPI, and can\'t be posted to using the plugin.', 'post-to-google-my-business'),
			__('Learn more...', 'post-to-google-my-business')
		);
	}

	public function business_selector_controls(){
		return '<div class="mbp-business-options">
				<input type="text" class="mbp-filter-locations" placeholder="' . __('Search/Filter locations...', 'post-to-google-my-business') . '" />
				<button class="button mbp-refresh-locations refresh-api-cache" style="float:right;">' . __('Refresh locations', 'post-to-google-my-business') . '</button>
			</div>';
	}

	public function flush_cache($flush_cache = true){
		$this->flush_cache = $flush_cache;
		return $flush_cache;
	}

	public function ajax_refresh(){
		$refresh = isset($_POST['refresh']) && $_POST['refresh'] == "true";

		$selected = isset($_POST['selected']) ? (array)$_POST['selected'] : [];
		$selected = array_map('sanitize_text_field', $selected);

		$this->set_selected_locations($selected);

		$this->flush_cache($refresh);
		echo $this->generate();
		wp_die();
	}

	public function set_field_name($field_name){
		$this->field_name = $field_name;
	}

	public function set_selected_locations($locations){
		$this->selected = $locations;
	}

	public function set_default_location( $default_location ) {
		$this->default_location = $default_location;
	}

	public function register_ajax_callbacks($prefix) {
		add_action("wp_ajax_{$prefix}_refresh_locations", [$this, 'ajax_refresh']);
	}
}
