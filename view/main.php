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
  <title> �û���¼ ������ </title>

	 <script language="javascript" type="text/javascript" src="/nego/Js/jq.js"></script>
	 <script type="text/javascript" src="/nego/Js/interface.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/cssLogin.css" />
 <script language="javascript" type="text/javascript" src="/nego/Js/main.js"></script>

 <link href="style.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
 		<h3>��ӭ����</h3>
  <div id="divLogin"></div>
  <fieldset>

		<!--
		<div class="btnCenter">
			<input id="Button_chkinvite" type="button" value="�ҵ�����" class="btn" />&nbsp;&nbsp;
			<input id="Button_chknego" type="button" value="�ҵ�̸��" class="btn" />&nbsp;&nbsp;
			<input id="Button_logout" type="button" value="�ǳ�" class="btn" />&nbsp;&nbsp;
		</div>
		-->
		<!--����Ч-->
		<div class="dock" id="dock">
			<div class="dock-container">
			<a id="Button_self" class="dock-item" ><img src="/nego/images/home.png" alt="home" /><span>�ҵ���Ϣ</span></a> 
			<a id="Button_friend" class="dock-item" ><img src="/nego/images/friend.png" alt="friend" /><span>�������</span></a> 
			<a id="Button_contract" class="dock-item" ><img src="/nego/images/calendar.png" alt="calendar" /><span>�ҵĺ�ͬ</span></a> 
			<a id="Button_platform" class="dock-item" ><img src="/nego/images/platform.png" alt="platform" /><span>����ƽ̨</span></a> 
			<a id="Button_chkinvite" class="dock-item" ><img src="/nego/images/email.png" alt="email" /><span>�ҵ�����</span></a> 
			<a id="Button_chknego" class="dock-item" ><img src="/nego/images/mynego.png" alt="mynego" /><span>�ҵ�̸��</span></a> 
			<a id="Button_logout" class="dock-item" ><img src="/nego/images/rss2.png" alt="rss2" /><span>ע��</span></a> 
			
			</div>
		</div>
		<!--����Ч-->
		</fieldset>
	
  
  <div id="negolist"></div>
  
  <!--�û���һЩ����-->
  <!--
  <fieldset>
	<div class="content2">
		<div class="btnCenter2">
			<input id="Button_self" type="button" value="�ҵ���Ϣ" class="btn" />&nbsp;&nbsp;
			<input id="Button_friend" type="button" value="�������" class="btn" />&nbsp;&nbsp;
			<input id="Button_contract" type="button" value="�ҵĺ�ͬ" class="btn" />&nbsp;&nbsp;
			<input id="Button_platform" type="button" value="̸�н���" class="btn" />&nbsp;&nbsp;
		</div>
	</div>
  </fieldset>
  </div>
  -->
  
  <!--�û���Ϣ���div-->
  <div id="selfinfo">
	<div>�û�����&nbsp;&nbsp;<input id="userName" type="text" class="txt" />
		</div>
		
	<div>ͷ��&nbsp;&nbsp;&nbsp;&nbsp;<input id="userImage" type="text" class="txt" />
	<input id="Button_imageself" type="button" value="�ϴ�ͷ��" class="btn" />
		</div>
		
	<div>�û���Ϣ��<input id="userInfo" type="text" class="txt" />
		</div>
	
	<div>
	<input id="Button_backself" type="button" value="����" class="btn" />
	<input id="Button_saveself" type="button" value="����" class="btn" />
		</div>
  </div>
  
 </body>
</html>

