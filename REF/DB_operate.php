<?php

//向在线用户列表新增一条用户数据
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

//向谈话内容表新增一条数据
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