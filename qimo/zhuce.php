<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style type="text/css">
	table{
		margin:80px auto;
	}
	table tr td{
		font-size:24px;
		color:#FDFDFD;
	}
	table tr td input{
		font-size:23px;
		
	}
	body{
		background:url(images/zhuce.jpg);
	}
</style>
</head>
<script>
     function check(){
		 var f1 = document.getElementById("f1");
		 var name = document.getElementById("name");
		 var pwd = document.getElementById("pwd");
		 if(name.value == ""){
			 alert("用户不能为空");
			 name.focus();
			 return false;			 
		 }
		 if(pwd.value == ""){
			 alert("密码不能为空");
			 pwd.focus();
			 return false;			 
		 }
		 f1.submit();
	 }      
</script>
<body>
<form action="zhucedo.php" method="post" id="f1">
	<table>
		<tr>
			<td colspan="2"><h1>欢迎你来到注册页面</h1></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>用 户：</td>
			<td><input name="yh" type="text" placeholder="请输入您的用户名" id="name"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>密 码：</td>
			<td><input name="mm" type="text" placeholder="请输入您的密码" id="pwd"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>邮 箱：</td>
			<td><input name="yx" type="text" placeholder="请输入您的邮箱" id="email"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>手机号码：</td>
			<td><input name="hm" type="text" placeholder="请输入您的手机号码" id="number"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>地 址：</td>
			<td><input name="dz" type="text" placeholder="请输入您的地址" id="address"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td align="center"><input type="button" name="sub" value="注册" onclick="check()"/></td>
			<td align="center"><input type="button" name="fh" value="返回" onClick="location.href='denglv.php'"></td>
		</tr>
	</table>
</form>
</body>
</html>