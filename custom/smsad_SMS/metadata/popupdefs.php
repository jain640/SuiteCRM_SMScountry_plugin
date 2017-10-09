<?php
$popupMeta = array (
    'moduleMain' => 'smsad_SMS',
    'varName' => 'smsad_SMS',
    'orderBy' => 'smsad_sms.name',
    'whereClauses' => array (
  'name' => 'smsad_sms.name',
  'message_id' => 'smsad_sms.message_id',
  'from_sms' => 'smsad_sms.from_sms',
  'parent_name' => 'smsad_sms.parent_name',
  'to_sms' => 'smsad_sms.to_sms',
  'description' => 'smsad_sms.description',
  'message_status_c' => 'smsad_sms_cstm.message_status_c',
  'smsad_sms_template_smsad_sms_name' => 'smsad_sms.smsad_sms_template_smsad_sms_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'message_id',
  5 => 'from_sms',
  6 => 'parent_name',
  7 => 'to_sms',
  8 => 'description',
  9 => 'message_status_c',
  10 => 'smsad_sms_template_smsad_sms_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'message_id' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MESSAGE_ID',
    'width' => '10%',
    'name' => 'message_id',
  ),
  'from_sms' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FROM_SMS',
    'width' => '10%',
    'name' => 'from_sms',
  ),
  'parent_name' => 
  array (
    'type' => 'parent',
    'studio' => 'visible',
    'label' => 'LBL_FLEX_RELATE',
    'link' => true,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'width' => '10%',
    'name' => 'parent_name',
  ),
  'to_sms' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_TO_SMS',
    'width' => '10%',
    'name' => 'to_sms',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
  'message_status_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MESSAGE_STATUS',
    'width' => '10%',
    'name' => 'message_status_c',
  ),
  'smsad_sms_template_smsad_sms_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SMSAD_SMS_TEMPLATE_SMSAD_SMS_FROM_SMSAD_SMS_TEMPLATE_TITLE',
    'id' => 'SMSAD_SMS_TEMPLATE_SMSAD_SMSSMSAD_SMS_TEMPLATE_IDA',
    'width' => '10%',
    'name' => 'smsad_sms_template_smsad_sms_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'FROM_SMS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FROM_SMS',
    'width' => '10%',
    'default' => true,
  ),
  'PARENT_NAME' => 
  array (
    'type' => 'parent',
    'studio' => 'visible',
    'label' => 'LBL_FLEX_RELATE',
    'link' => true,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'width' => '10%',
    'default' => true,
    'name' => 'parent_name',
  ),
  'TO_SMS' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_TO_SMS',
    'width' => '10%',
    'default' => true,
    'name' => 'to_sms',
  ),
  'SMSAD_SMS_TEMPLATE_SMSAD_SMS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SMSAD_SMS_TEMPLATE_SMSAD_SMS_FROM_SMSAD_SMS_TEMPLATE_TITLE',
    'id' => 'SMSAD_SMS_TEMPLATE_SMSAD_SMSSMSAD_SMS_TEMPLATE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'MESSAGE_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MESSAGE_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'message_id',
  ),
  'MESSAGE_STATUS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_MESSAGE_STATUS',
    'width' => '10%',
    'name' => 'message_status_c',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
),
);
