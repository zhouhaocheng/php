<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>删除信息</title>
</head>

<body>
<?php
	include('conn.php');
	include('session.php');
	if(isset($_GET['xuehao'])){
		$xuehao = $_GET['xuehao'];
		$sql = "DELETE FROM student where xuehao='$xuehao'";		
		$r = mysql_query($sql);
		if($r){
			echo '<script>alert("删除成功");location.href="cxsy1.php";</script>';	
		}else{
			echo '<script>alert("删除失败");location.href="cxsy1.php";</script>';
		}	
	}else{
		echo '<script>alert("请先选择需要删除的条目");location.href="message.php";</script>';
	}
?>
</body>
</html>