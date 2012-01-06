<?php
	/*
	 * create at 6th Jan
	 * do the logout function
	 * input:action of "logout"
	 * output:"True"
	 * */
	 
	$action = $_REQUEST["action"];
	 if($action == "dologout")
		echo "True";
	 else
		echo "False";
?>