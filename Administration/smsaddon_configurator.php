<?php 
/********************** SMS Module ******************************/

$admin_option_defs=array();
$admin_option_defs['Administration']['sms_configurator']= array('Password','LBL_MANAGE_SMS','LBL_SMS','./index.php?module=Configurator&action=sms_configurator');
// @@@@ BEGIN CALLINIZE COMMUNITY ONLY @@@@

$admin_option_defs['Administration']['sms_proxy']= array('Administration','LBL_PROXY_SMS','LBL_PROXY_SMS_DESC','./index.php?module=Configurator&action=sms_proxy');
// @@@@ BEGIN CALLINIZE COMMUNITY ONLY @@@@


$admin_group_header[]=array('LBL_SMS_TITLE','',false,$admin_option_defs, 'LBL_SMS_DESC');

/********************** SMS Module ******************************/


?>