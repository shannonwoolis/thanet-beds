/**
 * @property {string} ajaxurl URL for ajax request set by WordPress
 *
 * Translations
 * @property {Array} mbp_localize_script[] Array containing translations
 * @property {string} mbp_localize_script.refresh_locations "Refresh Locations"
 * @property {string} mbp_localize_script.please_wait "Please wait..."
 */

import * as $ from "jquery";
import PostEditor from "./components/PostEditor";
import BusinessSelector from "./components/BusinessSelector";


const BUSINESSSELECTOR_CALLBACK_PREFIX = mbp_localize_script.BUSINESSSELECTOR_CALLBACK_PREFIX;
const POST_EDITOR_CALLBACK_PREFIX = mbp_localize_script.POST_EDITOR_CALLBACK_PREFIX;
const FIELD_PREFIX = mbp_localize_script.FIELD_PREFIX;

let postEditor = new PostEditor(false, POST_EDITOR_CALLBACK_PREFIX);
postEditor.setFieldPrefix(FIELD_PREFIX);



new BusinessSelector($('.mbp-google-settings-business-selector'), BUSINESSSELECTOR_CALLBACK_PREFIX);


$('.pgmb-disconnect-website').click(function(event){
    if(!confirm(mbp_localize_script.delete_account_confirmation)){
        event.preventDefault();
    }
});


export { postEditor, FIELD_PREFIX, POST_EDITOR_CALLBACK_PREFIX };
