<?php
include_once("DB_operate.php");
session_start();//��ʼһ���Ự,�÷�$_SESSION['name'] = value;


$action = $_REQUEST["action"];
$name = $_REQUEST["name"];
$pass = $_REQUEST["pass"];
$content = $_REQUEST["content"];


//$action = "OnLineList";//���ڲ���ShowOnlineList()����
//$action = "ChatList";//���ڲ���ShowChatList()����
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


//�û���½ �û����Ʋ��������б�
function UserLogin($name, $pass)
{
	$flag = "False";
	if($pass == "pass")
	{
		Insert_OnlineUserList($name);
		//�����ͻ����û���session
		$_SESSION['userName'] = $name;
		$flag = "True";
	}
	
	return $flag;
}

function UserRegister($name, $pass)
{
	$flag = "False";
/*�������ݿ⣬�������û�*/
		$flag = "True";
	
	return $flag;
}


?>