<?php
// SYNC TEST
// This $config_meta array is used by configuratorGeneratorUtil.php to automatically generate the .tpl file html
// The default type = "varchar" & by default it's 'required'
// Put all the config params in order.  They're processed sequentially, each time the 'section' changes a new section header is placed in the template.

$config_meta['sms_user'] = array('default' => 'ami_user', 'section'=>'SMS Server Settings');
$config_meta['sms_secret'] = array('default' => 'ami_pass', 'section'=>'SMS Server Settings');
