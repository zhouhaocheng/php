<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>添加成绩信息</title>
<style>
body{
	background:url(images/index.jpg);
	}	
</style>
</head>

<body>
<div align="center">
<h1>添加科目信息</h1>
<form action="" method="post">
	<h3>科 目 名 称：<input type="text" name="kmmc"></br></h3>
	<input type="submit" name="tj" value="添加"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" name="Sub" value="返回" onclick ="location.href='glkm.php'"/>
</form>

</div>
<?php
	include('session.php');
	include('conn.php');
	if(isset($_POST['tj'])){
	$kmmc = $_POST['kmmc'];
	$sqll = "INSERT INTO kemu(kmmc) VALUES ('$kmmc')";
	$rrr = mysql_query($sqll);
	if($rrr){
		echo "<script> alert('添加科目成功');location.href='glkm.php';</script>";
	}else{
		echo "<script> alert('添加科目失败');location.href='glkm.php';</script>";
	}
}
?>
</body>
</html>