$(function(){

	
	//Ԫ�ذ�ȫ��ajaxStart�¼�
	$("#divMsg").ajaxStart(function(){
		$(this).show();//��ʾԪ��
	})

	//Ԫ�ذ�ȫ��ajaxStop�¼�
	$("#divMsg").ajaxStop(function(){
		$(this).html("�������Ѿ����").hide();
	})

	//Button1����¼�
	$("#Button1").click(function(){
		
		var $name=$("#txtName");//�û���
		var $pass=$("#txtPass");//password
		if($name.val() != "" & $pass.val() != ""){
			UserLogin($name.val(), $pass.val());//call the function UserLogin(string name, string pass)
		}else{
			if($name.val() == ""){
				alert("�û�������Ϊ��");
				$name.focus();
				return false;
			}else{
				alert("���벻��Ϊ��");
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
		var $name=$("#userName");//�û���
		var $pass=$("#userPass1");//password
		var $pass2=$("#userPass2");//password2
		if($name.val() != "" & $pass.val() != "" & $pass2.val() != ""){
			if($pass.val()!=$pass2.val())
			{	
				alert("���벻һ��������������");
				$pass2.val("");
				return false;
			}
			else
				UserRegister( $name.val(), $pass.val());//call the function UserLogin(string name, string pass)
		}else{
			if($name.val() == ""){
				alert("�û�������Ϊ��");
				$name.focus();
				return false;
			}else{
				alert("���벻��Ϊ��");
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
				alert("��¼ʧ�ܣ��û������������");
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
				alert("��ϲ��ע��ɹ�");
				window.location = "/nego/view/main.php";//if success, go to main.php
			}else{
				alert("�û����ظ���");
				return false;
			}
		}
	});
}