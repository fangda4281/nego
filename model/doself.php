<?php 
	/*
	 * 1.6
	 * input:action "doself"
	 * output:"self infomation",later should be xml file
	   input:action "saveinfo"
	   output:used to save user's new selfinfo.
	 
	 * */
	//$_SESSION['userId'] = "1";//need to change later
	session_start();
	$action = $_REQUEST["action"];
	$name = $_REQUEST["name"];
	$image = $_REQUEST["image"];
	$info = $_REQUEST["info"];
	
	/*if($_SESSION['userId'] == 1){
	$u_id = 1;
	}else{
	$u_id = 2;
	}*/

	$u_id = $_SESSION['userId'];
	//$u_id = "1";
	//$action = "doself";
	$uname = "test";
	$uimage = "path";
	$uinfo = "user info";

	//Control
	switch($action){
	case "doself":
		echo ShowSelfInfo($u_id);
		break;
	case "saveinfo":
		echo "True";
		break;
	default:
		echo "False";
	}
	
	//action doself
	function ShowSelfInfo($u_id){
		$uname = "null";
		$uimage = "null";
		$uinfo = "null";
		@ $db = new mysqli('localhost', 'nego','nego','nego');
		if(mysqli_connect_errno())
		{
			echo	'Error:Could not connect to database. Please try again later.';
			exit;
		}
		$query = "select * from user where u_id='$u_id'";

		$res = $db->query($query);
		$num_results = $res->num_rows;
		$exist = $num_results;
		if($exist){
			$row = $res->fetch_assoc();
			$uname = stripslashes($row['u_name']);
			$uimage = stripslashes($row['u_image']);
			$uinfo = stripslashes($row['u_info']);
			
		}else{
			$uname = "not found";
			$uimage = "not found";
			$uinfo = "not found";
		}
		$db->close();
		//return xml
		$doc = new DOMDocument("1.0");
		header("Content-Type: text/xml");
		$root = $doc->createElement("root");
		$doc->appendChild($root);

		$column = $doc->createElement("selfinfo");
		$root->appendChild($column);

		$item = $doc->createElement("name");
		$column->appendChild($item);

		$text = $doc->createTextNode($uname);
		$item->appendChild($text);

		$item = $doc->createElement("image");
		$column->appendChild($item);

		$text = $doc->createTextNode($uimage);
		$item->appendChild($text);

		$item = $doc->createElement("info");
		$column->appendChild($item);

		$text = $doc->createTextNode($uinfo);
		$item->appendChild($text);

		echo $doc->saveXML();
		
		
	
	}
	//$exist = $num_results;
?>