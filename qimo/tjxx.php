<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>添加学生信息</title>
<style>
body{
	background:url(images/index.jpg);
	}	
</style>
</head>

<body>
<div align="center">
<h1>添加学生信息</h1>
<form action="" method="post">
	<h3>学 号：<input type="text" name="tjxh"></br></h3>	
	<h3>姓 名：<input type="text" name="tjxm"></br></h3>
	<h3>性 别：<select name="xingbie">
		<option name="男">男</option>
		<option name="女">女</option>
	</select></br></h3>
	<h3>班 级：<input type="text" name="banji"></br></h3>
	<input type="submit" name="tj" value="添加"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" name="Sub" value="返回" onclick ="location.href='message.php'"/>
</form>
</div>

<?php
	include('conn.php');
	if(isset($_POST['tj'])){
	$tjxh = $_POST['tjxh'];
	$tjxm = $_POST['tjxm'];
	$xingbie = $_POST['xingbie'];
	$banji = $_POST['banji'];
	$sqll = "INSERT INTO student(xuehao,name,xingbie,banji) VALUES ('$tjxh','$tjxm','$xingbie','$banji')";
	$r = mysql_query($sqll);
	if($r){
		echo "<script> alert('添加信息成功');location.href='tjxx.php';</script>";
	}else{
		echo "<script> alert('添加信息失败');location.href='tjxx.php';</script>";
	}
}
?>
</body>
</html>