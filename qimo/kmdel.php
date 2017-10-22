<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改公告</title>
</head>

<body>
<?php
	include('session.php');
	include('conn.php');
	if(isset($_GET['kmid'])){
		$kmid = $_GET['kmid'];
		$sql = "DELETE FROM kemu where kmid='$kmid'";		
		$r = mysql_query($sql);
		if($r){
			echo '<script>alert("删除成功");location.href="glkm.php";</script>';			
		}else{
			echo '<script>alert("删除失败");location.href="glkm.php";</script>';
		}
	}else{
		echo '<script>alert("请先选择需要删除的条目");location.href="index.php";</script>';	
	}
?>
</body>
</html>