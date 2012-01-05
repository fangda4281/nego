<?php
	/*
	 * terrycaifd Jan 5 1.0
	 * */
	include_once("assign.php");
	/*开始一个会话,用法$_SESSION['name'] = value;*/
	session_start();
	echo	"DB_localhost:\t".$DB_localhost."<br/>";
	echo	"DB_user:\t".$DB_user."<br/>";
	echo	"DB_password:\t".$DB_password."<br/>";
	echo	"DB_database:\t".$DB_database."<br/>";
	
	$username = "test1";
	$userpass = "test1";
	
	
	@ $db = new mysqli('localhost', 'nego','nego','nego');
	if(mysqli_connect_errno())
	{
		echo	'Error:Could not connect to database. Please try again later.';
		exit;
	}
	
	$query = "insert into user (u_name, u_pass) values ('$username','$userpass')";
	$result = $db->query($query);
	$db->close();
?>