<?php
	/*
	*terrycaifd Jan 5th 
	*/
	
	/*
	*DB_localhost,DB_user,DB_password,DB_database
	*/
	include_once("assign.php");
	session_start();/*开始一个会话,用法$_SESSION['name'] = value;*/
	$action = $_REQUEST["action"];
	$name = $_REQUEST["name"];
	$pass = $_REQUEST["pass"];
	$content = $_REQUEST["content"];
	
	//echo	"DB_localhost:\t".$DB_localhost."<br/>";
	//echo	"DB_user:\t".$DB_user."<br/>";
	//echo	"DB_password:\t".$DB_password."<br/>";
	//echo	"DB_database:\t".$DB_database."<br/>";

	/*assign username and userpass*/
	//$username = "test";
	//$userpass = "test";
	$username = $name;
	$userpass = $pass;

	@ $db = new mysqli('localhost', 'nego','nego','nego');
	if(mysqli_connect_errno())
	{
		echo	'Error:Could not connect to database. Please try again later.';
		exit;
	}

	/*work*/
	//$query = "select * from user where u_name='test' and u_pass='test'";
	$query = "select * from user where u_name='$username' and u_pass='$userpass'";

	$res = $db->query($query);
	$num_results = $res->num_rows;
	$exist = $num_results;
	//echo	"exist:\t".$exist."<br/>";
	if($exist){
		$row = $res->fetch_assoc();
		$u_id = stripslashes($row['u_id']);
		$_SESSION['userId'] = $u_id;
		$_SESSION['userName'] = $username;
		$_SESSION['userPass'] = $userpass;
		//echo	"session u_id:\t".$_SESSION['userId']."<br/>";
		//echo	"session userName:\t".$_SESSION['userName']."<br/>";
		//echo	"session userPass:\t".$_SESSION['userPass']."<br/>";
		//echo	"true"."<br/>";
		echo	"True";
	}else{
		echo	"False";
	}

	//$res->free();
	$db->close();
	

	

?>