<?php
$module_name = 'smsad_SMS';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'message_id' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MESSAGE_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'message_id',
      ),
      'from_sms' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FROM_SMS',
        'width' => '10%',
        'default' => true,
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
        'default' => true,
        'name' => 'parent_name',
      ),
      'message_status_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_MESSAGE_STATUS',
        'width' => '10%',
        'name' => 'message_status_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'description' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'message_id' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MESSAGE_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'message_id',
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'studio' => 'visible',
        'label' => 'LBL_FLEX_RELATE',
        'link' => true,
        'sortable' => false,
        'related_fields' => 
        array (
          0 => 'parent_id',
          1 => 'parent_type',
        ),
        'width' => '10%',
        'default' => true,
        'ACLTag' => 'PARENT',
        'dynamic_module' => 'PARENT_TYPE',
        'id' => 'PARENT_ID',
        'name' => 'parent_name',
      ),
      'to_sms' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_TO_SMS',
        'width' => '10%',
        'default' => true,
        'name' => 'to_sms',
      ),
      'from_sms' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FROM_SMS',
        'width' => '10%',
        'default' => true,
        'name' => 'from_sms',
      ),
      'message_status_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
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
        'default' => true,
        'name' => 'smsad_sms_template_smsad_sms_name',
      ),
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
        'name' => 'current_user_only',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
