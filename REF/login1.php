<?php
include_once("DB_operate.php");
session_start();//开始一个会话,用法$_SESSION['name'] = value;


$action = $_REQUEST["action"];
$name = $_REQUEST["name"];
$pass = $_REQUEST["pass"];
$content = $_REQUEST["content"];


//$action = "OnLineList";//用于测试ShowOnlineList()函数
//$action = "ChatList";//用于测试ShowChatList()函数
/*$action = "Login";
$name = "terry";
$pass = "pass";
*/




switch($action)
{
	case "Login":
		echo	UserLogin($name, $pass);
		break;
	case "Register":
		echo    UserRegister($name,$pass);
		break;
}


//用户登陆 用户名称插入在线列表
function UserLogin($name, $pass)
{
	$flag = "False";
	if($pass == "pass")
	{
		Insert_OnlineUserList($name);
		//建立客户端用户的session
		$_SESSION['userName'] = $name;
		$flag = "True";
	}
	
	return $flag;
}

function UserRegister($name, $pass)
{
	$flag = "False";
/*连接数据库，插入新用户*/
		$flag = "True";
	
	return $flag;
}


?>