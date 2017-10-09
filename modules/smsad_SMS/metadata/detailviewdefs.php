<?php
$module_name = 'smsad_SMS';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'to_sms',
            'label' => 'LBL_TO_SMS',
          ),
          1 => 
          array (
            'name' => 'from_sms',
            'label' => 'LBL_FROM_SMS',
          ),
        ),
        2 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'message_id',
            'label' => 'LBL_MESSAGE_ID',
          ),
        ),
        4 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'smsad_sms_template_smsad_sms_name',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'smsad_sms_smsad_sms_template_name',
          ),
        ),
      ),
    ),
  ),
);
?>
