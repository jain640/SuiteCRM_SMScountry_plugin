<?php
require_once('modules/AOW_Actions/actions/actionBase.php');
class actionSendSms extends actionBase
{
    function actionSendSms($id = '')
    {
        parent::actionBase($id);
    }
 
	function loadJS(){
        return array('modules/AOW_Actions/actions/actionSendSms.js');
    } 
    function run_action(SugarBean $bean,$params = array())
    {
		include_once('modules/smsad_sms_template/smsad_sms_template.php');
		global $db;
		global $app_list_strings;
		global $db;

        try{
			if(!empty($params['sms_template']))	{
				$query = $db->pquery("select description, id from smsad_sms_template where id='?'",array($params['sms_template']));
				$val = $db->fetchByAssoc($query);
				$desc = $val['description'];
				$smsad_sms_template_smsad_smssmsad_sms_template_ida = $val['id'];
			}
			else{
				$desc = $bean->description;
			}
			if(!empty($params['email'][0]))	
				$phone = (int)$params['email'][0];
			else{
			//	$phone = (int)$bean->phone_work;
				$sms_phone_type=$params['email_to_type'][0];
				$phone = (int)$bean->$sms_phone_type;
			}
			require_once('modules/smsad_SMS/smsad_SMS.php');
			$lbn_lbn = new smsad_SMS();
			$lbn_lbn->mode = 'create';
			$lbn_lbn->id = '';
			$lbn_lbn->parent_type = $bean->module_name;
			$lbn_lbn->parent_id = $bean->id;
			$lbn_lbn->smsad_sms_template_smsad_smssmsad_sms_template_ida = $smsad_sms_template_smsad_smssmsad_sms_template_ida;
			$lbn_lbn->to_sms = $phone;
			$lbn_lbn->description = $desc;
			$lbn_lbn->save();
		} catch(exception $e) {
			   // SugarApplication::appendErrorMessage("Error - " . strval($e->getResponseCode()) . ' ' . $e->getMessage());
		}
    }

    function edit_display($line, SugarBean $bean = null, $params = array())
    {
		global $app_list_strings;
		global $db;
		$query = $db->pquery("select id,name from smsad_sms_template");
		while($value = $db->fetchByAssoc($query))	{
			$sms_template_array[$value['id']] = $value['name'];
		}
		$app_list_strings['aow_sms_type_list'] = array('phone_mobile' => 'Mobile Phone');
		$html = '<input type="hidden" name="aow_sms_type_list" id="aow_sms_type_list" value="'.get_select_options_with_id($app_list_strings['aow_sms_type_list'], '').'">';
		$html .= '<input type="hidden" name="aow_actions_param['.$line.'][sms_typelist]" id="aow_actions_param_sms_type_list'.$line.'" value="'.get_select_options_with_id($app_list_strings['aow_sms_type_list'],'').'" />';
		$checked = '';
		// if(isset($params['individual_email']) && $params['individual_email']) $checked = 'CHECKED';

        $html .= "<table border='0' cellpadding='0' cellspacing='0' width='100%'>";
        $html .= "<tr>";
		$html .= '<td id="name_sms_label" scope="row" valign="top" width="12.5%">'.translate("LBL_SMS_TEMPLATE","AOW_Actions").':<span class="required">*</span></td>';
        $html .= "<td valign='top' width='37.5%'>";
		$html .= "<select name='aow_actions_param[".$line."][sms_template]' id='aow_actions_param_sms_template".$line."' onchange='show_edit_template_link(this,".$line.");' >".get_select_options_with_id($sms_template_array, $params['sms_template'])."</select>";
		$html .= "</td>";
		$html .= '<td id="relate_smslabel" scope="row" valign="top">';
        $html .= '</td>';
        $html .= "<td valign='top' width='37.5%'>";

		//$html .= "<input type='hidden' name='aow_actions_param[".$line."][individual_email]' value='0' >";
		//$html .= "<input type='checkbox' id='aow_actions_param[".$line."][individual_email]' name='aow_actions_param[".$line."][individual_email]' value='1' $checked></td>";
        $html .= '</td>';
        $html .= "</tr>";
		$html .= "<tr>";
        $html .= '<td id="name_sms_label" scope="row" valign="top" width="12.5%">'.translate("LBL_TOSMS","AOW_Actions").':<span class="required">*</span></td>';
        $html .= '<td valign="top" scope="row" width="37.5%">';

        $html .='<button id="to_addbutton" type="button" onclick="add_smsLine('.$line.')"><img src="'.SugarThemeRegistry::current()->getImageURL('id-ff-add.png').'"></button>';
        $html .= '<table id="smsLine'.$line.'_table" width="100%"></table>';
        $html .= '</td>';
        $html .= "</tr>";
        $html .= "</table>";
		$html .= "<script id ='aow_script".$line."'>";
		if(isset($params['email_to_type'])){
            foreach($params['email_to_type'] as $key => $field){
                $html .= "load_smsline('".$line."','".$params['email_to_type'][$key]."','".$params['email'][$key]."');";
            }
		} 

		$html .= "</script>";
		$html .= "</tr>";
		$html .= "</table>";
		return $html;
    }
}
?>

