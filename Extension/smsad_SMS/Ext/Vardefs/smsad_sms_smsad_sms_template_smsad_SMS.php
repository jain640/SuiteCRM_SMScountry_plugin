<?php
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
