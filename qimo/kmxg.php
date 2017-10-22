<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改科目信息</title>
</head>

<body>
<div align="center">
<?php
	include('session.php');
	include('conn.php');
	if(isset($_GET['kmid'])){
		$kmid = $_GET['kmid'];
		$sql = "select * from kemu where  kmid = '$kmid'";		
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
		$kmid = $row->kmid;
		$kmmc = $row->kmmc;
		echo '<form action="kmxgdo.php" method="post">';
		echo '<p>修改信息</p>';
		echo '科目ID：<input type="text" name="kmid" value="'.$kmid.'" /><br/>';
		echo '科目名称：<input type="text" name="kmmc" value="'.$kmmc.'" /><br/>';
		echo '<input type="submit" value="修改" name="sub" />';
		echo '<form>';
	}else{
		echo '<script>alert("请先选择需要修改的科目");location.href="glkm.php";</script>';
	}
?>
</div>
</body>
</html>