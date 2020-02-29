<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理登陆</title>
<link rel="stylesheet" type="text/css" href=/assets/css/adcss.css>
<link rel="stylesheet" type="text/css" href=/assets/font/iconfont.css>
<SCRIPT language=javascript>
function Checklogin()
{
	if (form1.user.value=="")
	{
		alert("请填写登录名");
		form1.user.focus();
		return false;
	}
	if (form1.pwd.value=="")
	{
		alert("密码不能为空");
		form1.pwd.focus();
		return false;
	}
}
</SCRIPT>
</head>
<body class="index">
	<div class="login_wrap">
		<img src="/assets/images/logo.png" width="188" height="48" />
		 <form name="form1" method="POST" 
		 	action="/mvc.php?act=admin/logincheck" 
		 	onsubmit="return Checklogin();" class="form">
			<div class="row">
				<i class="iconfont  icon-user1"></i>
				<input name="user" type="text" placeholder="请输入用户名" maxlength="10" />
			 </div>
			 <div class="row">
				<i class="iconfont  icon-pwd"></i>
				<input name="pwd" type="password" placeholder="请输入密码" maxlength="10" />
			 </div>
			 <div class="row">      
				<input type="submit" name="Submit" value="马上登录" class="btn-sub" />   
			 </div>
		 </form>
	</div>
</body>
</html>