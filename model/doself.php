<?php 
	/*
	 * 1.6
	 * input:action "doself"
	 * output:"self infomation",later should be xml file
	   input:action "saveinfo"
	   output:used to save user's new selfinfo.
	 
	 * */
	
	$action = $_REQUEST["action"];
	$name = $_REQUEST["name"];
	$image = $_REQUEST["image"];
	$info = $_REQUEST["info"];
	 if($action == "doself")
		echo "True";
	 else if($action == "saveinfo")
		echo "True";
	 else 
		echo "False";
?>