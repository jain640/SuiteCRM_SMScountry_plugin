<?php
 // created: 2017-01-08 17:28:25
$layout_defs["Leads"]["subpanel_setup"]['smsad_sms_leads_1'] = array (
  'order' => 100,
  'module' => 'smsad_SMS',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SMSAD_SMS_LEADS_1_FROM_SMSAD_SMS_TITLE',
  'get_subpanel_data' => 'smsad_sms_leads_1',
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
