$(function(){

	
	//元素绑定全局ajaxStart事件
	$("#divMsg").ajaxStart(function(){
		$(this).show();//显示元素
	})

	//元素绑定全局ajaxStop事件
	$("#divMsg").ajaxStop(function(){
		$(this).html("请求处理已经完成").hide();
	})

	//Button1点击事件
	$("#Button1").click(function(){
		
		var $name=$("#txtName");//用户名
		var $pass=$("#txtPass");//password
		if($name.val() != "" & $pass.val() != ""){
			UserLogin($name.val(), $pass.val());//call the function UserLogin(string name, string pass)
		}else{
			if($name.val() == ""){
				alert("用户名不能为空");
				$name.focus();
				return false;
			}else{
				alert("密码不能为空");
				$pass.focus();
				return false;
			}
		}
	})
	$("#Reset1").click(function(){
		$("#txtName").val("");
		$("#txtPass").val("");
		
	})
	$("#Reset2").click(function(){
		$("#userId").val("");
		$("#userName").val("");
		$("#userPass1").val("");
		$("#userPass2").val("");
		
	})
	$("#Button2").click(function(){
		alert("clicked");
		window.location = "/nego/view/register.php";
	})
	$("#Button3").click(function(){
		var $name=$("#userName");//用户名
		var $pass=$("#userPass1");//password
		var $pass2=$("#userPass2");//password2
		if($name.val() != "" & $pass.val() != "" & $pass2.val() != ""){
			if($pass.val()!=$pass2.val())
			{	
				alert("密码不一样！请重新输入");
				$pass2.val("");
				return false;
			}
			else
				UserRegister( $name.val(), $pass.val());//call the function UserLogin(string name, string pass)
		}else{
			if($name.val() == ""){
				alert("用户名不能为空");
				$name.focus();
				return false;
			}else{
				alert("密码不能为空");
				$pass.focus();
				return false;
			}
		}
	})
	
	/**********changed on 2012/1/6***************/
	//to check my invitations
	$("#Button_chkinvite").click(function(){
		$.ajax({
		type: "POST",
		url: "/nego/model/dochkinvite.php",//deal login
		
		data: "action=dochkinvite",
		//data: "action=testData&name="+name+"&pass="+pass,
		
		success: function(data){
			//alert(data);
			if(data == "True"){
				alert("invite test success");
			}else{
				alert("invite test failed");
				return false;
			}
		}
		});
	})
	
	//to check my negotiations
	$("#Button_chknego").click(function(){
		$.ajax({
		type: "POST",
		url: "/nego/model/dochknego.php",//deal login
		
		data: "action=dochknego",
		//data: "action=testData&name="+name+"&pass="+pass,
		
		success: function(data){
			//alert(data);
			if(data == "True"){
				alert("nego test success");
			}else{
				alert("nego test failed");
				return false;
			}
		}
		});
	})
	
	
	//to logout
	$("#Button_logout").click(function(){
		$.ajax({
		type: "POST",
		url: "/nego/model/dologout.php",//deal login
		
		data: "action=dologout",
		//data: "action=testData&name="+name+"&pass="+pass,
		
		success: function(data){
			//alert(data);
			if(data == "True"){
				alert("logout test success");
				window.location = "/nego/view/login.php"
			}else{
				alert("logout test failed");
				return false;
			}
		}
		});
	})
	
	//do see my info
	$("#Button_self").click(function(){
		$.ajax({
		type: "POST",
		url: "/nego/model/doself.php",//deal login
		
		data: "action=doself",
		//data: "action=testData&name="+name+"&pass="+pass,
		
		success: function(data){
			//alert(data);
			if(data == "True"){
				alert("doself test success");
			}else{
				alert("doself test failed");
				return false;
			}
		}
		});
	})
	
	//see my friend
	$("#Button_friend").click(function(){
		$.ajax({
		type: "POST",
		url: "/nego/model/dofriend.php",//deal login
		
		data: "action=dofriend",
		//data: "action=testData&name="+name+"&pass="+pass,
		
		success: function(data){
			//alert(data);
			if(data == "True"){
				alert("dofriend test success");
			}else{
				alert("dofriend test failed");
				return false;
			}
		}
		});
	})
	
	//open contract  
	$("#Button_contract").click(function(){
		$.ajax({
		type: "POST",
		url: "/nego/model/docontract.php",//deal login
		
		data: "action=docontract",
		//data: "action=testData&name="+name+"&pass="+pass,
		
		success: function(data){
			//alert(data);
			if(data == "True"){
				alert("docontract test success");
			}else{
				alert("docontract test failed");
				return false;
			}
		}
		});
	})
	
	//jump to negotiation platform
	$("#Button_platform").click(function(){
		window.location = "/nego/view/platform.php";//if success, go to main page
	})
	
	//jump back to main platform
	$("#Button_main").click(function(){
		window.location = "/nego/view/main.php";//if success, go to main page
	})
	
});

function UserLogin(name, pass){
	$.ajax({
		type: "POST",
		url: "/nego/model/dologin.php",//deal login
		
		data: "action=Login&name="
		+ name+"&pass="+pass,
		//data: "action=testData&name="+name+"&pass="+pass,
		
		success: function(data){
			//alert(data);
			if(data == "True"){
				window.location = "/nego/view/main.php";//if success, go to main page
			}else{
				alert("登录失败，用户名或密码错误！");
				return false;
			}
		}
	});
}

function UserRegister(name, pass){
	$.ajax({
		type: "POST",
		url: "/nego/model/doregister.php",//deal register
		
		data: "action=Register&name="
		+ name+"&pass="+pass,
		//data: "action=testData&name="+name+"&pass="+pass,
		
		success: function(data){
			alert(data);
			if(data == "True"){
				alert("恭喜您注册成功");
				window.location = "/nego/view/main.php";//if success, go to main.php
			}else{
				alert("用户名重复！");
				return false;
			}
		}
	});
}