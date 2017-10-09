<?php
// created: 2017-01-08 17:33:26
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'from_sms' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_FROM_SMS',
    'width' => '10%',
    'default' => true,
  ),
  'parent_name' => 
  array (
    'type' => 'parent',
    'studio' => 'visible',
    'vname' => 'LBL_FLEX_RELATE',
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
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => 'parent_id',
  ),
  'to_sms' => 
  array (
    'type' => 'phone',
    'vname' => 'LBL_TO_SMS',
    'width' => '10%',
    'default' => true,
  ),
  'smsad_sms_template_smsad_sms_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_SMSAD_SMS_TEMPLATE_SMSAD_SMS_FROM_SMSAD_SMS_TEMPLATE_TITLE',
    'id' => 'SMSAD_SMS_TEMPLATE_SMSAD_SMSSMSAD_SMS_TEMPLATE_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'smsad_sms_template',
    'target_record_key' => 'smsad_sms_template_smsad_smssmsad_sms_template_ida',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'message_id' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MESSAGE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'message_status_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_MESSAGE_STATUS',
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'smsad_SMS',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'smsad_SMS',
    'width' => '5%',
    'default' => true,
  ),
);