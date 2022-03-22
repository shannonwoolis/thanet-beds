<?php

namespace PGMB\Subscriber;

use PGMB\API\CachedGoogleMyBusiness;

use PGMB\Components\GooglePostEntityListTable;
use PGMB\EventManagement\SubscriberInterface;
use PGMB\PostTypes\GooglePostEntityRepository;

class PostEntityListAjaxSubscriber implements SubscriberInterface {

	/**
	 * @var GooglePostEntityRepository
	 */
	private $repository;
	/**
	 * @var CachedGoogleMyBusiness
	 */
	private $api;

	public function __construct(GooglePostEntityRepository $repository, CachedGoogleMyBusiness $api) {

		$this->repository = $repository;
		$this->api = $api;
	}

	public static function get_subscribed_hooks() {
		return [
			'wp_ajax_pgmb_entity_list_display'  => 'list_display',
			'wp_ajax_pgmb_entity_list_update'   => 'list_update',
			'wp_ajax_pgmb_entity_bulk_action'   => 'handle_bulk_action',
		];
	}

	public function list_display(){
		check_ajax_referer( 'pgmb_subpost_table_fetch', 'ajax_list_table_nonce', true );

		$parent_post_id = (int)$_REQUEST['parent_id'];

		$wp_list_table = new GooglePostEntityListTable($parent_post_id, $this->repository, $this->api);
		$wp_list_table->prepare_items();

		ob_start();
		$wp_list_table->display();
		$display = ob_get_clean();

		die(

		json_encode(array(

			"display" => $display

		))

		);
	}

	public function list_update(){
		$parent_post_id = (int)$_REQUEST['parent_id'];
		$entity_list_table = new GooglePostEntityListTable($parent_post_id, $this->repository, $this->api);
		$entity_list_table->ajax_response();
	}

	public function handle_bulk_action(){
		check_ajax_referer( 'pgmb_subpost_table_fetch', 'ajax_list_table_nonce', true );

		$bulk_action = sanitize_text_field($_REQUEST['bulk_action']);

		$ids = $_REQUEST['post_ids'];
		if(!is_array($ids) || empty($ids)){
			return;
		}

		if($bulk_action === 'delete'){
			foreach($ids as $id){
				$google_post_entity = $this->repository->find_by_id((int)$id);
				if($google_post_entity){
					$this->repository->delete($google_post_entity);
				}
			}
		}
		wp_send_json_success();
	}

}
