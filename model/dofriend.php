<?php 
	/*
	 * 1.6
	 * input:action "dofriend"
	 * output:"friends infomation",later should be xml file or else
	 * */
	$action = $_REQUEST["action"];
	 if($action == "dofriend")
		echo "True";
	 else
		echo "False";
?>