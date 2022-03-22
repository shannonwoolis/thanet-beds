/**
 * @property {string} ajaxurl URL for ajax request set by WordPress
 */

import * as $ from 'jquery';

/**
 * Class to make the business selector work
 *
 * @param container Parent container selector
 * @param {string} ajax_prefix Prefix for ajax calls made to WordPress
 * @constructor
 */
let BusinessSelector = function(container, ajax_prefix){

    let instance = this;
    let fieldContainer = $('.mbp-business-selector', container);
    let locationBlockedInfo = $('.mbp-location-blocked-info', container);
    let refreshApiCacheButton = $('.refresh-api-cache', container);
    let businessSelectorSelectedLocation = $('input:checked', fieldContainer);

    /**
     * Case insentive filter function for locations
     */
    $.extend($.expr[":"], {
        "containsi": function(elem, i, match, array) {
            return (elem.textContent || elem.innerText || "").toLowerCase()
                .indexOf((match[3] || "").toLowerCase()) >= 0;
        }
    });

    /**
     * Filter the location list and keep only items that match the text
     */
    $(".mbp-filter-locations", container).keyup(function(){
        let search = $(this).val();

        $( ".mbp-business-selector tr.mbp-business-item", container).hide()
        .filter(":containsi(" + search + ")")
        .show();
    });

    /**
     * Hook function to select all locations to the appropriate button
     */
    $(".mbp-select-all-locations", container).click(function(event){
        event.preventDefault();
        $(".mbp-checkbox-container input:checkbox:visible", container).prop("checked", true);
    });

    /**
     * Hook function to select no locations to its' button
     */
    $(".mbp-select-no-locations", container).click(function(event){
        event.preventDefault();
        $(".mbp-checkbox-container input:checkbox:visible", container).prop("checked", false);
    });

    /**
     *
     * @param accountbody
     * @param revoke Whether to revoke the access tokens
     */
    this.deleteAccount = function(accountbody){
        let data = {
            'action': ajax_prefix + '_delete_account',
            'account_id': accountbody.data("account_id")
        };
        accountbody.remove();
        $.post(ajaxurl, data);
    };

    /**
     * Hook function to delete account buttons
     */
    $(container).on('click', '.mbp-disconnect-account', function(event){
        event.preventDefault();
        let shouldDelete = confirm(mbp_localize_script.delete_account_confirmation);
        if(!shouldDelete){
            return;
        }
        const accountbody = $(this).closest("tbody");
        instance.deleteAccount(accountbody);
    });


    let currentAccount;

    $(container).on('click', '.mbp-set-cookie-control', function(event){
        $("#pgmb-cookie-fieldset input").val('');
        const accountbody = $(this).closest("tbody");
        currentAccount = accountbody.data("account_id");
        tb_show("Set Account Cookies", "#TB_inline?width=600&height=300&inlineId=mbp-set-cookies-dialog");
    });

    $("#mbp-set-cookies-dialog-container button").click(function(event){
        let cookie_data = $("#pgmb-cookie-fieldset").serialize();
        let data = {
            'action': ajax_prefix + '_save_account_cookies',
            'cookie_data': cookie_data,
            'account_id': currentAccount
        };
        $.post(ajaxurl, data, function(response){
            tb_remove();
        });
    });


    /**
     * Hook function to toggle the selection of groups
     */
    $(".pgmb-toggle-group", container).click(function(event){
        event.preventDefault();

        let checkboxes = $(this).closest('tbody').find('.mbp-checkbox-container input:checkbox:visible');

        checkboxes.prop("checked", !checkboxes.prop("checked"));
    });

    /**
     * Checks if any of the businesses are not allowed to use the localPostAPI and show an informational message if one is
     */
    this.checkForDisabledLocations = function(){
        if($('input:disabled', fieldContainer).length){
            locationBlockedInfo.show();
            return;
        }
        locationBlockedInfo.hide();
    };
    this.checkForDisabledLocations();

    // this.scrollToSelectedLocation = function(){
    //     let selectedItem = $(".mbp-checkbox-container input[type='radio']:checked", container);
    //     console.log(selectedItem);
    //     fieldContainer.scrollTop(fieldContainer.scrollTop() + selectedItem.position().top
    //         - fieldContainer.height()/2 + selectedItem.height()/2);
    // }
    // this.scrollToSelectedLocation();

    /**
     * Refreshes the location listing
     *
     * @param {boolean} refresh When set to true - Forces a call to the Google API instead of relying on the local cache
     * @param {object} selected Array of selected locations
     */
    this.refreshBusinesses = function(refresh, selected){
        refresh = refresh || false;
        let data = {
            'action': ajax_prefix + '_refresh_locations',
            'refresh': refresh,
            'selected': selected
        };
        fieldContainer.empty();
        $.post(ajaxurl, data, function(response) {
            fieldContainer.replaceWith(response);
            //Refresh our reference to the field container
            fieldContainer = $('.mbp-business-selector', container);
            refreshApiCacheButton.html(mbp_localize_script.refresh_locations).attr('disabled', false);
            instance.checkForDisabledLocations();
        });
    };

    if(businessSelectorSelectedLocation.val() === '0'){
        this.refreshBusinesses(false);
    }

    /**
     * Obtain refreshed list of locations from the Google API
     */
    refreshApiCacheButton.click(function(event){
        event.preventDefault();
        let selectedBusinesses = {};

        $.each($('input:checked', fieldContainer), function(){
            let name = $(this).attr('name');
            let user_id = name.match(/([0-9]+)/);

            if(user_id[1]){
                //selectedBusinesses.push($(this).val());
                selectedBusinesses[user_id[1]] = $(this).val();
            }

        });

        instance.refreshBusinesses(true, selectedBusinesses);
        refreshApiCacheButton.html(mbp_localize_script.please_wait).attr('disabled', true);
    });
};


export default BusinessSelector;
