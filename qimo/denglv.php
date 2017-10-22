<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
<style type="text/css">
	table{
		margin:5% auto;	
	}
	table tr td {
		font-size:30px;	
	}
	table tr td input{
		font-size:25px;
	}
	table tr td img {
		width: 80px;
		height: 50px;
	}
	body{
		background:url(images/denglv.jpg);
	}
</style> 
</head>
<script language="javascript">
function tosubmit2(){
	document.form1.action = "denglvdo.php";
	document.form1.submit();
}

	</script>
<body>
	<form name="form1" method="post">
		<table>
			<tr>
				<td colspan="2">
					<h1>欢迎使用教务系统<h1>
				</td>
			</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td> 用 户：</td>
			<td>
				<input name="yh" type="text" placeholder="请输入您的用户名"/>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td> 密 码：</td>
			<td>
				<input name="mm" type="password" placeholder="请输入您的密码"/>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td height="50px">验证码：</td>
			<td height="50px">
				<input name="yzm" type="text"/>&nbsp;&nbsp;
				<img src="png.php"  onClick="this.src=this.src+'?'+Math.random()"/>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td align="center">
				<input type="submit" name="sub" value="管理员登录" onclick="tosubmit2()">
			</td>
			</td>
			<td align="center">
				<input type="button" name="zc" value="注册" onClick="location.href='zhuce.php'">
			</td>
		</tr>
		</table>
	</form>
	<?php
	session_start();
	if (isset($_GET['logout'])){
		unset($_SESSION['passwd']);
	}
	?>
</body>
</html>