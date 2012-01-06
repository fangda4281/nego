<?php
/*
 * functions:logout,check invits,check negolist
 * should include "/Js/main.js"
 * the jquery ajax should write in /Js/main.js*/
echo	"this main.php";
?>

<!--changed on 2012/1/6-->


<html>
 <head>
  <title> 用户登录 主界面 </title>

	 <script language="javascript" type="text/javascript" src="/nego/Js/jq.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/cssLogin.css" />
 <script language="javascript" type="text/javascript" src="/nego/Js/main.js"></script>

 
 </head>

 <body>
  <div id="divLogin">
  <fieldset>
	<div class="content">
		<h3>欢迎您！</h3>

		<div class="btnCenter">
			<input id="Button_chkinvite" type="button" value="我的邀请" class="btn" />&nbsp;&nbsp;
			<input id="Button_chknego" type="button" value="我的谈判" class="btn" />&nbsp;&nbsp;
			<input id="Button_logout" type="button" value="登出" class="btn" />&nbsp;&nbsp;
		</div>

	</div>
  </fieldset>

  
  <!--用户的一些功能-->
  <fieldset>
	<div class="content2">
		<div class="btnCenter2">
			<input id="Button_self" type="button" value="我的信息" class="btn" />&nbsp;&nbsp;
			<input id="Button_friend" type="button" value="合作伙伴" class="btn" />&nbsp;&nbsp;
			<input id="Button_contract" type="button" value="我的合同" class="btn" />&nbsp;&nbsp;
			<input id="Button_platform" type="button" value="谈判界面" class="btn" />&nbsp;&nbsp;
		</div>

	</div>
  </fieldset>
  </div>
 </body>
</html>

