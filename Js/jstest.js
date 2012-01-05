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
		window.location = "register.html";
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
});

function UserLogin(name, pass){
	$.ajax({
		type: "POST",
		url: "login1.php",//服务器端处理数据的文件,暂时定为DealData.php
		
		data: "action=Login&name="
		+ name+"&pass="+pass,
		//data: "action=testData&name="+name+"&pass="+pass,
		
		success: function(data){
			alert(data);
			if(data == "True"){
				window.location = "ChatMain.html";//当条件都吻合时，跳转至ChatMain.html讨论区界面
			}else{
				alert("注册失败，用户名或密码错误！");
				return false;
			}
		}
	});
}

function UserRegister(name, pass){
	$.ajax({
		type: "POST",
		url: "login1.php",//服务器端处理数据的文件,暂时定为DealData.php
		
		data: "action=Register&name="
		+ name+"&pass="+pass,
		//data: "action=testData&name="+name+"&pass="+pass,
		
		success: function(data){
			alert(data);
			if(data == "True"){
				alert("恭喜您注册成功");
				window.location = "sy.html";//当条件都吻合时，跳转至ChatMain.html讨论区界面
			}else{
				alert("用户名重复！");
				return false;
			}
		}
	});
}