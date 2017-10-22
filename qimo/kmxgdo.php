<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
</head>

<body>
<?php
	include('conn.php');
	if(isset($_POST['kmid'])){
		$kmid = $_POST['kmid'];
		$kmmc = $_POST['kmmc'];
		$sql = "UPDATE kemu SET kmid='$kmid',kmmc='$kmmc' where kmid='$kmid'";	
		$r = mysql_query($sql);
		if($r==true){
			echo '<script>alert("修改成功");location.href="kmxg.php";</script>';
		}else{
			echo '<script>alert("修改失败");location.href="kmxg.php?kmid='.$kmid.'";</script>';
		}
	}else{
		echo '<script>alert("请先选择需要修改的条目");location.href="kmgl.php";</script>';
	}
?>
</body>
</html>