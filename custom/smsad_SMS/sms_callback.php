<?php
try
{
	include_once('config.php');
	$filename="smslog.txt";
	if (!$handle = fopen($filename, 'a')) {
         echo "Cannot open file ($filename)";
         exit;
    }
	$text = "\n\r";
	$text .= "\n\r";
	$text .= json_encode($_SERVER);

	$post = file_get_contents('php://input');
	$text .= $post;
	$post = json_decode($post, true);
	switch (json_last_error()) {
		case JSON_ERROR_NONE:
			
			break;
		case JSON_ERROR_DEPTH:
			$text .= "\n\r";
			$text .= ' - Maximum stack depth exceeded';
			$output =array('error'=>' - Maximum stack depth exceeded', 'data'=>array(), 'success'=>null);
		break;
		case JSON_ERROR_STATE_MISMATCH:
			$text .= "\n\r";
			$text .= ' - Underflow or the modes mismatch';
			$output =array('error'=>' - Underflow or the modes mismatch', 'data'=>array(), 'success'=>null);
		break;
		case JSON_ERROR_CTRL_CHAR:
			$text .= "\n\r";
			$text .= ' - Unexpected control character found';
			$output =array('error'=>' - Unexpected control character found', 'data'=>array(), 'success'=>null);
		break;
		case JSON_ERROR_SYNTAX:
			$text .= "\n\r";
			$text .= ' - Syntax error, malformed JSON';
			$output =array('error'=>' - Syntax error, malformed JSON', 'data'=>array(), 'success'=>null);
		break;
		case JSON_ERROR_UTF8:
			$text .= "\n\r";
			$text .= ' - Malformed UTF-8 characters, possibly incorrectly encoded';
			$output =array('error'=>' - Malformed UTF-8 characters, possibly incorrectly encoded', 'data'=>array(), 'success'=>null);
		break;
		default:
			$text .= "\n\r";
			$text .= ' - Unknown error';
			$output =array('error'=>' - Unknown error', 'data'=>array(), 'success'=>null);
		break;
	}
    if (fwrite($handle, $text) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
	
	$link = mysql_connect($sugar_config['dbconfig']['db_host_name'],$sugar_config['dbconfig']['db_user_name'],$sugar_config['dbconfig']['db_password']); 
	if (!$link)
		die('Could not connect to MySQL: ' . mysql_error()); 
	mysql_select_db($sugar_config['dbconfig']['db_name']);
	$query = "select * from smsad_sms where message_id='".$post['MessageUUID']."' ";
	$recset = mysql_query($query,$link) or die(mysql_error());
	if(mysql_num_rows($recset)>0)
	{
		$row= mysql_fetch_array($recset);
		$recordId = $row['id'];
		$query2 = "UPDATE smsad_sms SET message_status ='".$post['Status']."', message_response =concat(message_response,'".json_encode($post)."') WHERE  id='" . $recordId . "';";
		$result2 = mysql_query($query2,$link);
		
		$query = "SELECT * FROM smsad_sms_cstm WHERE id_c='".$recordId."'";
		$results = mysql_query($query,$link);
		if($results){
			$query2 = "UPDATE smsad_sms_cstm SET message_status_c = '".$post['Status']."' where id_c='".$recordId."'";
			$result2 = mysql_query($query2,$link);
		}
		else{
			$query2 = "INSERT INTO smsad_sms_cstm (id_c, message_status_c) values('" . $recordId . "', '".$post['Status']."');";
			$result2 = mysql_query($query2,$link);
		}
		echo $text = "Status Updated For SMS ID ".$post['MessageUUID'];
		fwrite($handle, $text);
		//Echo "SMS Created Successfully.";
	}
	else{
		echo "No SMS found with ID ".$post['MessageUUID'];
	}
	
	exit;
}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
	fwrite($handle, $e->getMessage());
}
function getRandomWord($len = 10) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}
?>
