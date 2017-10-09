<?php
// SYNC TEST
// This $config_meta array is used by configuratorGeneratorUtil.php to automatically generate the .tpl file html
// The default type = "varchar" & by default it's 'required'
// Put all the config params in order.  They're processed sequentially, each time the 'section' changes a new section header is placed in the template.

$config_meta['sms_host'] 	= array('default' => '127.0.0.1', 'section'=>'SMScountry Server Settings');
$config_meta['sms_port'] 	= array('default' => '', 'type'=>'int', 'section'=>'SMScountry Server Settings');
