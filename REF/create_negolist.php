<?php
$doc = new DOMDocument("1.0", "gb2312");
header("Content-Type: text/xml");

$nego_list = $doc->createElement("nego_list");
$doc->appendChild($nego_list);

$nego_num=10;//邀请个数
while($nego_num>0)
{

	$nego_num = $nego_num-5;
	//变量声明：
	$nego_contract_id = "1";
	$nego_contract_title = "sss";
	$nego_nego_id = "2";
	$nego_nego_A_id = "3";
	$nego_nego_A_name = "Fangda Cai";
	$nego_nego_B_id = "4";
	$nego_nego_B_name = "Shuoquan Xu";
	$nego_start_time_year = "2012";
	$nego_start_time_month = "1";
	$nego_start_time_day = "20";
	$nego_status = "finished";
	
	//nego 小根节点
	$nego = $doc->createElement("nego");
	$nego_list->appendChild($nego);	
	$nego_id = $doc->createAttribute("id"); 
	$nego->appendChild($nego_id); 
	$nego_id_value = $doc->createTextNode($nego_num); 
	$nego_id->appendChild($nego_id_value);
	
	//合同id以及title
	$contract = $doc->createElement("contract");
	$nego->appendChild($contract);
	$contract_id = $doc->createElement("contract_id");
	$contract->appendChild($contract_id);
	$contract_id_value = $doc->createTextNode($nego_contract_id); 
	$contract_id->appendChild($contract_id_value); 
	
	$contract_title = $doc->createElement("contract_title");
	$contract->appendChild($contract_title);
	$contract_title_value = $doc->createTextNode($nego_contract_title); 
	$contract_title->appendChild($contract_title_value); 
	
	//nego id
	$nego_id = $doc->createElement("nego_id");
	$nego->appendChild($nego_id);
	$nego_id_value = $doc->createTextNode($nego_nego_id); 
	$nego_id->appendChild($nego_id_value); 

	//nego_A 谈判甲方 id 和 name
	$nego_A = $doc->createElement("nego_A");
	$nego->appendChild($nego_A);
	$nego_A_id = $doc->createElement("nego_A_id");
	$nego_A->appendChild($nego_A_id);
	$nego_A_id_value = $doc->createTextNode($nego_nego_A_id); 
	$nego_A_id->appendChild($nego_A_id_value); 
	
	$nego_A_name = $doc->createElement("nego_A_name");
	$nego_A->appendChild($nego_A_name);
	$nego_A_name_value = $doc->createTextNode($nego_nego_A_name); 
	$nego_A_name->appendChild($nego_A_name_value); 
	
	//nego_B 谈判乙方
	$nego_B = $doc->createElement("nego_B");
	$nego->appendChild($nego_B);
	$nego_B_id = $doc->createElement("nego_B_id");
	$nego_B->appendChild($nego_B_id);
	$nego_B_id_value = $doc->createTextNode($nego_nego_B_id); 
	$nego_B_id->appendChild($nego_B_id_value); 
	
	$nego_B_name = $doc->createElement("nego_B_name");
	$nego_B->appendChild($nego_B_name);
	$nego_B_name_value = $doc->createTextNode($nego_nego_B_name); 
	$nego_B_name->appendChild($nego_B_name_value); 
	
	//谈判时间
	$start_time = $doc->createElement("start_time");
	$nego->appendChild($start_time);
	$start_time_year = $doc->createElement("start_time_year");
	$start_time->appendChild($start_time_year);
	$start_time_year_value = $doc->createTextNode($nego_start_time_year); 
	$start_time_year->appendChild($start_time_year_value); 
	
	$start_time_month = $doc->createElement("start_time_month");
	$start_time->appendChild($start_time_month);
	$start_time_month_value = $doc->createTextNode($nego_start_time_month); 
	$start_time_month->appendChild($start_time_month_value); 
		
	$start_time_day = $doc->createElement("start_time_day");
	$start_time->appendChild($start_time_day);
	$start_time_day_value = $doc->createTextNode($nego_start_time_day); 
	$start_time_day->appendChild($start_time_day_value); 
	
	//谈判状态
	$status = $doc->createElement("status");
	$nego->appendChild($status);
	$status_value = $doc->createTextNode($nego_status); 
	$status->appendChild($status_value); 
	
}
//循环XML生成完毕
echo $doc->saveXML();
?>
	