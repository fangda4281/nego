<?php 
	/*
	 * 1.6
	 * input:action "docontract"
	 * output:"contract management",later should be xml file or else
	 * */
	$action = $_REQUEST["action"];
	 if($action == "docontract")
		echo "True";
	 else
		echo "False";
?>