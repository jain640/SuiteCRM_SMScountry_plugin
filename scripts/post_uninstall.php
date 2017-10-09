<?php if (! defined('sugarEntry') || ! sugarEntry) die('Not A Valid Entry Point');

post_uninstall();

function post_uninstall() 
{
    global $db;
    // delete ClickSMS configuration from database
    $delete_query = "DELETE FROM config WHERE category in ('sms_user','sms_secret','sms_host')";
    $db->query($delete_query);
	
	 echo "SendSMS configurations have been removed.";
}