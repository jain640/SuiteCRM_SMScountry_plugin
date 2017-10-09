<?php
 // created: 2017-01-08 17:29:06
$layout_defs["smsad_SMS"]["subpanel_setup"]['smsad_sms_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SMSAD_SMS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'smsad_sms_contacts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
