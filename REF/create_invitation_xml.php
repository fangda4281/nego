<?php
$doc = new DOMDocument("1.0");
header("Content-Type: text/xml");
$invitation_list = $doc->createElement("invitation_list");
$doc->appendChild($invitation_list);
$invitation_type = $doc->createAttribute("type"); 
$invitation_list->appendChild($invitation_type);
$invitation_num=10;//邀请个数
//用循环XML生成
while($invitation_num>0)
{
	$invitation_num = $invitation_num - 1;
	//初始化invitaion变量
	$invitation_nego_id = "12";
	$invitation_sender_id = "123";
	$invitation_sender_name = "cfd";
	$invitation_contract_id = "456";
	$invitation_contract_title = "cfd_xsq_sy_ll";
	$invitation_status = "0";
	$invitation_role = "1";
	$invitation_start_time_year = "2011";
	$invitation_start_time_month = "01";
	$invitation_start_time_day = "07";
	//邀请ID
	$invitation = $doc->createElement("invitation");
	$invitation_list->appendChild($invitation);	
	$invitation_id = $doc->createAttribute("id"); 
	$invitation->appendChild($invitation_id); 
	$invitation_id_value = $doc->createTextNode($invitation_num); 
	$invitation_id->appendChild($invitation_id_value);
	//NEGO_ID
	$nego_id = $doc->createElement("nego_id");
	$invitation->appendChild($nego_id);
	$nego_id_value = $doc->createTextNode($invitation_nego_id); 
	$nego_id->appendChild($nego_id_value);
	//发送邀请方
	$sender = $doc->createElement("sender");
	$invitation->appendChild($sender);
	$sender_id = $doc->createElement("sender_id");
	$sender->appendChild($sender_id);
	$sender_id_value = $doc->createTextNode($invitation_sender_id); 
	$sender_id->appendChild($sender_id_value); 
	$sender_name = $doc->createElement("sender_name");
	$sender->appendChild($sender_name);
	$sender_name_value = $doc->createTextNode($invitation_sender_name); 
	$sender_name->appendChild($sender_name_value); 
	//Contract
	$contract = $doc->createElement("contract");
	$invitation->appendChild($contract);
	$contract_id = $doc->createElement("contract_id");
	$contract->appendChild($contract_id);
	$contract_id_value = $doc->createTextNode($invitation_contract_id); 
	$contract_id->appendChild($contract_id_value); 
	$contract_title = $doc->createElement("contract_title");
	$contract->appendChild($contract_title);
	$contract_title_value = $doc->createTextNode($invitation_contract_title); 
	$contract_title->appendChild($contract_title_value); 
	//邀请状态
	$status = $doc->createElement("status");
	$invitation->appendChild($status);
	$status_value = $doc->createTextNode($invitation_status);
	$status->appendChild($status_value);
	//谈判中的角色
	$role = $doc->createElement("role");
	$invitation->appendChild($role);
	$role_value = $doc->createTextNode($invitation_role);
	$role->appendChild($role_value);
	//开始谈判时间
	$start = $doc->createElement("start");
	$invitation->appendChild($start);
	$start_year = $doc->createElement("start_year");
	$start->appendChild($start_year);
	$start_year_value = $doc->createTextNode($invitation_start_time_year);
	$start_year->appendChild($start_year_value);
	$start_month = $doc->createElement("start_month");
	$start->appendChild($start_month);
	$start_month_value = $doc->createTextNode($invitation_start_time_month);
	$start_month->appendChild($start_month_value);
	$start_day = $doc->createElement("start_day");
	$start->appendChild($start_day);
	$start_day_value = $doc->createTextNode($invitation_start_time_day);
	$start_day->appendChild($start_day_value);
}
//循环XML生成完毕
echo $doc->saveXML();
?>