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
	 <script type="text/javascript" src="/nego/Js/interface.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/cssLogin.css" />
 <script language="javascript" type="text/javascript" src="/nego/Js/main.js"></script>

 <link href="style.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
 		<h3>欢迎您！</h3>
  <div id="divLogin"></div>
  <fieldset>

		<!--
		<div class="btnCenter">
			<input id="Button_chkinvite" type="button" value="我的邀请" class="btn" />&nbsp;&nbsp;
			<input id="Button_chknego" type="button" value="我的谈判" class="btn" />&nbsp;&nbsp;
			<input id="Button_logout" type="button" value="登出" class="btn" />&nbsp;&nbsp;
		</div>
		-->
		<!--新特效-->
		<div class="dock" id="dock">
			<div class="dock-container">
			<a id="Button_self" class="dock-item" ><img src="/nego/images/home.png" alt="home" /><span>我的信息</span></a> 
			<a id="Button_friend" class="dock-item" ><img src="/nego/images/friend.png" alt="friend" /><span>合作伙伴</span></a> 
			<a id="Button_contract" class="dock-item" ><img src="/nego/images/calendar.png" alt="calendar" /><span>我的合同</span></a> 
			<a id="Button_platform" class="dock-item" ><img src="/nego/images/platform.png" alt="platform" /><span>商务平台</span></a> 
			<a id="Button_chkinvite" class="dock-item" ><img src="/nego/images/email.png" alt="email" /><span>我的邀请</span></a> 
			<a id="Button_chknego" class="dock-item" ><img src="/nego/images/mynego.png" alt="mynego" /><span>我的谈判</span></a> 
			<a id="Button_logout" class="dock-item" ><img src="/nego/images/rss2.png" alt="rss2" /><span>注销</span></a> 
			
			</div>
		</div>
		<!--新特效-->
		</fieldset>
	
  
  <div id="negolist"></div>
  
  <!--用户的一些功能-->
  <!--
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
  -->
  
  <!--用户信息输出div-->
  <div id="selfinfo">
	<div>用户名：&nbsp;&nbsp;<input id="userName" type="text" class="txt" />
		</div>
		
	<div>头像：&nbsp;&nbsp;&nbsp;&nbsp;<input id="userImage" type="text" class="txt" />
	<input id="Button_imageself" type="button" value="上传头像" class="btn" />
		</div>
		
	<div>用户信息：<input id="userInfo" type="text" class="txt" />
		</div>
	
	<div>
	<input id="Button_backself" type="button" value="返回" class="btn" />
	<input id="Button_saveself" type="button" value="保存" class="btn" />
		</div>
  </div>
  
 </body>
</html>

