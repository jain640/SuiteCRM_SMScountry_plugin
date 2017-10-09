<?php
$module_name = 'smsad_SMS';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
	'javascript' => '<script type="text/javascript" src="https://www.google.com/jsapi"></script>',
	  'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/'.$module_name.'/javascript/quickcreatesmspopup.js',
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
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
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
            'label' => 'Load From SMS Template',
			'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'smsad_sms_template_smsad_smssmsad_sms_template_ida',
                'name' => 'smsad_sms_template_smsad_sms_name',
                'description' => 'description',
              ),
            ),
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
