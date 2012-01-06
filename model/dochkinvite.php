<?php 
	/*
	 * create at Jan 6
	 * input:"dochkinvite"
	 * output:"infomation of invitation list,
	 * later should be xml file"
	 * */
	 
	 $action = $_REQUEST["action"];
	 if($action == "dochkinvite")
		echo "True";
	 else
		echo "False";
?>