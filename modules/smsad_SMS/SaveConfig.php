<?php

require_once('modules/Administration/Administration.php');
$administration = new Administration();
//do data validation, etc here
//....
//save the setting to the config table
if(isset($_REQUEST['sms_user']))
	$administration->saveSetting('abc_Module', 'sms_user', $_REQUEST['sms_user']);
if(isset($_REQUEST['sms_secret']))
	$administration->saveSetting('abc_Module', 'sms_secret', $_REQUEST['sms_secret']);
if(isset($_REQUEST['sms_host']))
	$administration->saveSetting('abc_Module', 'sms_host', $_REQUEST['sms_host']);
if(isset($_REQUEST['sms_port']))
	$administration->saveSetting('abc_Module', 'sms_port', $_REQUEST['sms_port']);



