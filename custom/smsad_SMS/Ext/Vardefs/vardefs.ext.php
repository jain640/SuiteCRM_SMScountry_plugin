<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-01-08 16:43:34
$dictionary["smsad_SMS"]["fields"]["smsad_sms_smsad_sms_template"] = array (
  'name' => 'smsad_sms_smsad_sms_template',
  'type' => 'link',
  'relationship' => 'smsad_sms_smsad_sms_template',
  'source' => 'non-db',
  'module' => 'smsad_sms_template',
  'bean_name' => 'smsad_sms_template',
  'vname' => 'LBL_SMSAD_SMS_SMSAD_SMS_TEMPLATE_FROM_SMSAD_SMS_TEMPLATE_TITLE',
  'id_name' => 'smsad_sms_smsad_sms_templatesmsad_sms_template_ida',
);
$dictionary["smsad_SMS"]["fields"]["smsad_sms_smsad_sms_template_name"] = array (
  'name' => 'smsad_sms_smsad_sms_template_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SMSAD_SMS_SMSAD_SMS_TEMPLATE_FROM_SMSAD_SMS_TEMPLATE_TITLE',
  'save' => true,
  'id_name' => 'smsad_sms_smsad_sms_templatesmsad_sms_template_ida',
  'link' => 'smsad_sms_smsad_sms_template',
  'table' => 'smsad_sms_template',
  'module' => 'smsad_sms_template',
  'rname' => 'name',
);
$dictionary["smsad_SMS"]["fields"]["smsad_sms_smsad_sms_templatesmsad_sms_template_ida"] = array (
  'name' => 'smsad_sms_smsad_sms_templatesmsad_sms_template_ida',
  'type' => 'link',
  'relationship' => 'smsad_sms_smsad_sms_template',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SMSAD_SMS_SMSAD_SMS_TEMPLATE_FROM_SMSAD_SMS_TITLE',
);


// created: 2017-01-08 16:43:34
$dictionary["smsad_SMS"]["fields"]["smsad_sms_template_smsad_sms"] = array (
  'name' => 'smsad_sms_template_smsad_sms',
  'type' => 'link',
  'relationship' => 'smsad_sms_template_smsad_sms',
  'source' => 'non-db',
  'module' => 'smsad_sms_template',
  'bean_name' => 'smsad_sms_template',
  'vname' => 'LBL_SMSAD_SMS_TEMPLATE_SMSAD_SMS_FROM_SMSAD_SMS_TEMPLATE_TITLE',
  'id_name' => 'smsad_sms_template_smsad_smssmsad_sms_template_ida',
);
$dictionary["smsad_SMS"]["fields"]["smsad_sms_template_smsad_sms_name"] = array (
  'name' => 'smsad_sms_template_smsad_sms_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SMSAD_SMS_TEMPLATE_SMSAD_SMS_FROM_SMSAD_SMS_TEMPLATE_TITLE',
  'save' => true,
  'id_name' => 'smsad_sms_template_smsad_smssmsad_sms_template_ida',
  'link' => 'smsad_sms_template_smsad_sms',
  'table' => 'smsad_sms_template',
  'module' => 'smsad_sms_template',
  'rname' => 'name',
);
$dictionary["smsad_SMS"]["fields"]["smsad_sms_template_smsad_smssmsad_sms_template_ida"] = array (
  'name' => 'smsad_sms_template_smsad_smssmsad_sms_template_ida',
  'type' => 'link',
  'relationship' => 'smsad_sms_template_smsad_sms',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SMSAD_SMS_TEMPLATE_SMSAD_SMS_FROM_SMSAD_SMS_TITLE',
);


// created: 2017-01-08 17:28:25
$dictionary["smsad_SMS"]["fields"]["smsad_sms_leads_1"] = array (
  'name' => 'smsad_sms_leads_1',
  'type' => 'link',
  'relationship' => 'smsad_sms_leads_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_SMSAD_SMS_LEADS_1_FROM_LEADS_TITLE',
);


// created: 2017-01-08 17:28:42
$dictionary["smsad_SMS"]["fields"]["smsad_sms_accounts_1"] = array (
  'name' => 'smsad_sms_accounts_1',
  'type' => 'link',
  'relationship' => 'smsad_sms_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_SMSAD_SMS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);


// created: 2017-01-08 17:29:06
$dictionary["smsad_SMS"]["fields"]["smsad_sms_contacts_1"] = array (
  'name' => 'smsad_sms_contacts_1',
  'type' => 'link',
  'relationship' => 'smsad_sms_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_SMSAD_SMS_CONTACTS_1_FROM_CONTACTS_TITLE',
);

?>