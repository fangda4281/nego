<?php
	/*
	 * terrycaifd Jan 5 1.0
	 * */
	include_once("assign.php");
	/*��ʼһ���Ự,�÷�$_SESSION['name'] = value;*/
	session_start();
	//echo	"DB_localhost:\t".$DB_localhost."<br/>";
	//echo	"DB_user:\t".$DB_user."<br/>";
	//echo	"DB_password:\t".$DB_password."<br/>";
	//echo	"DB_database:\t".$DB_database."<br/>";
	$action = $_REQUEST["action"];
	$name = $_REQUEST["name"];
	$pass = $_REQUEST["pass"];
	$content = $_REQUEST["content"];
	
	/*assign username and userpass*/
	//$username = "test1";
	//$userpass = "test1";
	$username = $name;
	$userpass = $pass;
	
	
	@ $db = new mysqli('localhost', 'nego','nego','nego');
	if(mysqli_connect_errno())
	{
		echo	'Error:Could not connect to database. Please try again later.';
		exit;
	}
	
	$query = "insert into user (u_name, u_pass) values ('$username','$userpass')";
	$result = $db->query($query);
	echo	"True";
	$db->close();
?>