<?php
$module_name = 'smsad_SMS';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
          0 => 
          array (
            'name' => 'parent_name',
            'studio' => 'visible',
            'label' => 'LBL_FLEX_RELATE',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'to_sms',
            'label' => 'LBL_TO_SMS',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'from_sms',
            'label' => 'LBL_FROM_SMS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'smsad_sms_template_smsad_sms_name',
          ),
          1 => 
          array (
            'name' => 'smsad_sms_smsad_sms_template_name',
          ),
        ),
      ),
    ),
  ),
);
?>
