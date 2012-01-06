<?php 
	/*
	 * 1.6
	 * input:action "doself"
	 * output:"self infomation",later should be xml file
	 * */
	
	$action = $_REQUEST["action"];
	 if($action == "doself")
		echo "True";
	 else
		echo "False";
?>