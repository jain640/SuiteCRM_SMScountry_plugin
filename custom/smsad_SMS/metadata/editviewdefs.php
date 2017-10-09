<?php
$module_name = 'smsad_SMS';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
	  'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/'.$module_name.'/javascript/smspopup.js',
        ),
      ),
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '<input title="Send" accesskey="a" class="button primary" onclick="var _form = document.getElementById(\'EditView\'); _form.action.value=\'Save\'; if(check_form(\'EditView\'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="Send" id="SAVE_HEADER">',
          ),
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
			'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'parent_id',
                'name' => 'parent_name',
                'phone_mobile' => 'to_sms',
              ),
          ),
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
