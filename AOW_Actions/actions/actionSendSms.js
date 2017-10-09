function add_smsLine(ln){
var emailln = new Array();
    var aow_email_type_list = document.getElementById("aow_sms_type_list").value;
   if(emailln[ln] == null){emailln[ln] = 0}
   console.log(aow_email_type_list); 
    tablebody = document.createElement("tbody");
    tablebody.id = 'smsLine'+ln+'_body' + emailln[ln];
   console.log(tablebody.id); 
    document.getElementById('smsLine'+ln+'_table').appendChild(tablebody);

    var x = tablebody.insertRow(-1);
    x.id = 'smsLine'+ln+'_line' + emailln[ln];

    var a = x.insertCell(0);
    a.innerHTML = "<button type='button' id='smsLine"+ln+"_delete" + emailln[ln]+"' class='button' value='Remove Line' tabindex='116' onclick='clear_smsLine(" + ln + ",this);'><img src='themes/default/images/id-ff-remove-nobg.png' alt='Remove Line'></button> ";

    a.innerHTML += "<select tabindex='116' name='aow_actions_param["+ln+"][email_to_type]["+emailln[ln]+"]' id='aow_actions_param"+ln+"_email_to_type"+emailln[ln]+"'>" + aow_email_type_list + "</select> ";


    a.innerHTML += "<br>Other Number : <span id='smsLine"+ln+"_field"+emailln[ln]+"'><input id='aow_actions_param"+ln+"_email"+emailln[ln]+"' type='text' tabindex='116' size='25' name='aow_actions_param["+ln+"][email]["+emailln[ln]+"]'></span>";


    emailln[ln]++;
    $( "#to_addbutton" ).hide();
    return emailln[ln] -1;
    
}

function load_smsline(ln, to, type){
    cln = add_smsLine(ln);
    document.getElementById("aow_actions_param"+ln+"_email_to_type"+cln).value = to;
    document.getElementById("aow_actions_param"+ln+"_email"+cln).value = type;
}

function clear_smsLine(ln, cln){

    document.getElementById('smsLine'+ln+'_table').deleteRow(cln.parentNode.parentNode.rowIndex);
    $( "#to_addbutton" ).show();
}

