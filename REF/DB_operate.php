<?php

//�������û��б�����һ���û�����
function Insert_OnlineUserList($newName)
{
 $db = new mysqli('localhost', 'root','sunyang','nssn');
	
if(mysqli_connect_errno())
{
	echo	'Error:Could not connect to database. Please try again later.';
	exit;
}

$query = "insert into onlineuserlist values('".$newName."')";

$result = $db->query($query);

$db->close();
}

//��̸�����ݱ�����һ������
function Insert_MessageList($content)
{
@ $db = new mysqli('localhost', 'root','sunyang','nssn');

if(mysqli_connect_errno())
{
	echo	'Error:Could not connect to database. Please try again later.';
	exit;
}

$query = "insert into messagelist values('".$content."')";

$result = $db->query($query);

$db->close();
}

?>