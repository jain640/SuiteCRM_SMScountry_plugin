<?php

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

require_once('include/MVC/View/views/view.list.php');
require_once 'modules/smsad_SMS/vendor/autoload.php';
include_once('modules/smsad_SMS/src/Controllers/MessagesController.php');
include_once('modules/smsad_SMS/src/Configuration.php');
include_once('modules/smsad_SMS/src/Models/Message.php');
include_once('modules/smsad_SMS/src/APIHelper.php');
include_once('modules/smsad_SMS/src/APIException.php');

use SMSCountryMessagingLib\Controllers\MessagesController;
use SMSCountryMessagingLib\Models\Message;

class smsad_SMSViewList extends ViewList
{
	function __construct(){
 		parent::__construct();
 	}
    /**
     * @see ViewList::preDisplay()
     */
    public function preDisplay()
    {
        parent::preDisplay();
		
		$this->lv->actionsMenuExtraItems[] = $this->buildMyMenuItem();

		require_once 'modules/Configurator/Configurator.php';
		$configurator = new Configurator();
		$configurator->loadConfig();
		if(!isset($configurator->config['sms_user']))
		{
			SugarApplication::appendErrorMessage("Undefined SMS Login Name.");
			return;
		}
		if(!isset($configurator->config['sms_secret']))
		{
			SugarApplication::appendErrorMessage("Undefined SMS Password.");
			return;
		}
		if(!isset($configurator->config['sms_host']))
		{
			SugarApplication::appendErrorMessage("Undefined SMS URL.");
			return;
		}
		$sms_user = $configurator->config['sms_user'];
		$sms_secret = $configurator->config['sms_secret'];
		$sms_host = $configurator->config['sms_host'];

		$controller = new MessagesController($sms_user, $sms_secret, $sms_host);
		$response = $controller->getSenderId();
		$dropdown = "<select name='from_sms' tabindex='0' id='from_sms'>";
		foreach($response->SenderIds as $SenderIds)
		{
			$dropdown .= "<option value='".$SenderIds->SenderId."'>	" . $SenderIds->SenderId . " </option>";
		}
		$dropdown .= '</select><br>';
		
		echo '<script src="custom/modules/smsad_SMS/javascript/jquery.fancybox.js" type="text/javascript" ></script>';
		echo '<link rel="stylesheet" type="text/css" href="custom/modules/smsad_SMS/javascript/jquery.fancybox.css" media="screen" />';
		//echo '<script type="text/javascript" src="https://www.google.com/jsapi"></script>';
		echo '<input type="text" name="send_text1" id="send_text1" >';
		echo '<script type="text/javascript">
		<!--
		 var txts ="<div><p>From: '.$dropdown.'</p><p>Language Translation: <input type=\'checkbox\' id=\'chktranslator\' name=\'chktranslator\' value=\'y\' onclick=\'chktranslatorclick();\'></p><p>Language: <select class=\'form-control\' id=\'msgtype_list\' disabled=\'disabled\' onchange =\'msgtype_listchange();\'><option value=\'en\'>English</option><option value=\'te\'>Telugu</option><option value=\'hi\'>Hindi</option><option value=\'ta\'>Tamil</option><option value=\'kn\'>Kannada</option><option value=\'ml\'>Malayalam</option><option value=\'mr\'>Marathi</option><option value=\'or\'>Oriya</option><option value=\'pa\'>Punjabi</option><option value=\'ur\'>Urdu</option><option value=\'sa\'>Sanskrit</option><option value=\'gu\'>Gujarati</option><option value=\'bn\'>Bengali</option><option value=\'ar\'>Arabic</option><option value=\'zh\'>Chinese</option><option value=\'el\'>Greek</option><option value=\'ne\'>Nepali</option><option value=\'fa\'>Persian</option><option value=\'ru\'>Russian</option><option value=\'sr\'>Serbian</option><option value=\'si\'>Sinhalese</option></select></p><textarea name=\'send_text\' id=\'send_text\' rows=\'5\' cols=\'20\' onkeyup=\'updateCount()\' onkeydown=\'updateCount()\'>Message</textarea><span id=\'counter\'>0/154<span></div><input type=\'submit\' value=\'Send\' onclick=\'clicke()\'> ";
		 var preferredLanguage = "te";
			var flg=false;
			var transliterationControl;
			
			function onLoad() {
				var a = {
					sourceLanguage: "en",
					destinationLanguage: ["te", "hi", "kn", "ml", "ta", "ar", "ur", "ti", "sr", "si", "ru", "sa", "pa", "fa", "or", "ne", "mr", "gu", "el", "zh", "bn", "am"],
					transliterationEnabled: false,
					shortcutKey: "ctrl+g"
				};
				transliterationControl = new google.elements.transliteration.TransliterationControl(a);

				transliterationControl.makeTransliteratable(["send_text1"]);
				transliterationControl.addEventListener(google.elements.transliteration.TransliterationControl.EventType.SERVER_UNREACHABLE, serverUnreachableHandler);
				transliterationControl.addEventListener(google.elements.transliteration.TransliterationControl.EventType
					.SERVER_REACHABLE,
					serverReachableHandler);
			}
			function serverUnreachableHandler(a) { console.log( "Transliteration Server unreachable");  }
			function serverReachableHandler(a) { document.getElementById("errorDiv").innerHTML = ""; }
			google.load("elements", "1", { packages: "transliteration", nocss : true  });
			google.setOnLoadCallback(onLoad);
			$("#send_text").keyup(updateCount);
			$("#send_text").keydown(updateCount);
		 function clicke(){
			if($("#from_sms").val()=="") {
				alert("Please select From.");
				return false;
			}
			var container = parent.document.getElementById("MassUpdate");
			var input = parent.document.createElement("input");
            input.type = "text";
            input.name = "message_sms";
			input.value = document.getElementById("send_text").value;
            container.appendChild(input);

			var input = parent.document.createElement("input");
            input.type = "text";
            input.name = "from_sms";
			input.value = document.getElementById("from_sms").value;
            container.appendChild(input);

			var input1 = parent.document.createElement("input");
            input1.type = "text";
            input1.name = "directmessage_sms";
			input1.value = "Direct";
            container.appendChild(input1);

			parent.document.MassUpdate.action.value="Save";
			parent.document.MassUpdate.submit();
			}
		$(document).ready(function() {
			$("#send_text").keyup(updateCount);
			$("#send_text").keydown(updateCount);
		});
		function updateCount() {
			var cs = $("#send_text").val().length;
			preferredLanguage = $("#msgtype_list").val();
			if(preferredLanguage=="en")
			{
				$("#counter").html(cs +"/154");
			}
			else
			{
				$("#counter").html(cs +"/70");
			}
		}
		function chktranslatorclick(){
					var Tckbox = $("input[name=chktranslator]:checked").val();
					$("#msgtype_list").attr("disabled",true);
					if((Tckbox == "y")){
						$("#msgtype_list").attr("disabled",false);
						send_text_focusin();
					}
		   }
		function msgtype_listchange(){
			preferredLanguage = $("#msgtype_list").val();
			send_text_focusin();
		}

			function send_text_focusin()
			{
				var Tckbox = $("input[name=chktranslator]:checked").val();
				if((Tckbox == "y")){
					if(!flg)
					{
						flg=true;
					
					
					var a = {
						sourceLanguage: "en",
						destinationLanguage: ["te", "hi", "kn", "ml", "ta", "ar", "ur", "ti", "sr", "si", "ru", "sa", "pa", "fa", "or", "ne", "mr", "gu", "el", "zh", "bn", "am"],
						transliterationEnabled: false,
						shortcutKey: "ctrl+g"
					};
					transliterationControl = new google.elements.transliteration.TransliterationControl(a);
					}
					preferredLanguage = $("#msgtype_list").val();
					if(preferredLanguage!="en")
					{
						transliterationControl.makeTransliteratable(["send_text"]);
						transliterationControl.enableTransliteration();
						transliterationControl.setLanguagePair(google.elements.transliteration.LanguageCode.ENGLISH, preferredLanguage);
					}
					else
					{
						transliterationControl.disableTransliteration();
					}
				}				
			}
		//-->
		</script>';
		
    }
    /**
     * @return string HTML
     */
    protected function buildMyMenuItem()
    {
        global $app_strings;
    
        return <<<EOHTML
<a class="menuItem" style="width: 150px;" href="#" onmouseover='hiliteItem(this,"yes");' 
        onmouseout='unhiliteItem(this);' id="button_name"
        onclick="sugarListView.get_checks();
        if(sugarListView.get_checks_count() &lt; 1) {
            alert('{$app_strings['LBL_LISTVIEW_NO_SELECTED']}');
            return false;
        }
		$.fancybox({
                'autoDimensions': false,
				'width'                : 300,
                'height'            : 300,
                'autoScale'            : false,
                'showNavArrows'        : true,
                'transitionIn'        : 'none',
                'transitionOut'        : 'none',
                'content': txts,
                'closeClick'        : false,
                'hideOnOverlayClick': false,
                'showCloseButton'    : true,
				
            });
			
        ">Send SMS!</a>
EOHTML;
    }
}

?>
