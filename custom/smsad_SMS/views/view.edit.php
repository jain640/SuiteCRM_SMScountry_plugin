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

require_once 'modules/smsad_SMS/vendor/autoload.php';
include_once('modules/smsad_SMS/src/Controllers/MessagesController.php');
include_once('modules/smsad_SMS/src/Configuration.php');
include_once('modules/smsad_SMS/src/Models/Message.php');
include_once('modules/smsad_SMS/src/APIHelper.php');
include_once('modules/smsad_SMS/src/APIException.php');

use SMSCountryMessagingLib\Controllers\MessagesController;
use SMSCountryMessagingLib\Models\Message;

class smsad_SMSViewEdit extends ViewEdit {
	function __construct(){
 		parent::__construct();
 	}

    function preDisplay() {
        parent::preDisplay();
    }

    function display() {
	$record = '';
	if(isset($_REQUEST['record']))
		$record = $_REQUEST['record'];
	$module = $_REQUEST['return_module'];
	$record_array = explode(',',$record);
	global $db;
	$phone_office='';
	$name='';
	foreach($record_array as $record_value)	{
		if($module == 'Leads');
			$query = $db->pquery("select phone_mobile,first_name,last_name from leads where id='?'",array($record_value));
		if($module == 'Contacts')
			$query = $db->pquery("select phone_mobile,first_name,last_name from contacts where id='?'",array($record_value));
		if($module == 'Accounts')
			$query = $db->pquery("select phone_office,name from accounts where id='?'",array($record_value));
		$value = $db->fetchByAssoc($query);
		if(count($value)>0)
		{
			if($module == 'Accounts')	{
				$phone_office .= $value['phone_office'] .',';
				$name .= $value['name']. " ".$value['last_name']. ',';
			}
			else{
				$phone_office .= $value['phone_mobile'].',';
				$name .= $value['first_name']. " ".$value['last_name'].',';
			}
		}	
	}
	$phone_office = rtrim($phone_office,',');
	$name =  rtrim($name,',');
	echo '<script type="text/javascript" src="https://www.google.com/jsapi"></script>';
	echo '<script src="custom/modules/smsad_SMS/javascript/jquery.fancybox.js" type="text/javascript" ></script>';
	echo '<link rel="stylesheet" type="text/css" href="custom/modules/smsad_SMS/javascript/jquery.fancybox.css" media="screen" />';
	echo "<input type='hidden' id='phone_work_hidden' value='".$phone_office."' />";
        echo "<input type='hidden' id='first_name_hidden' value='".$name."' />";
	echo "<input type='hidden' id='module' value='".$_REQUEST['return_module']."' />";
	echo "<input type='hidden' id='parent_id_hidden' value='".$record."' />";
		//echo 'it from Custom'; 
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
	$dropdown .= '</select>';
	echo '<script type="text/javascript">
		$(document).ready(function() {
			$("#from_sms").parent().html("'.$dropdown.'");
		});
	</script>';
	parent::display();

    }
}
?>
