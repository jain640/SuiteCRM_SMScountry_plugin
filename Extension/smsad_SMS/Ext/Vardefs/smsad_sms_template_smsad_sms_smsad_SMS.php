<?php
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
