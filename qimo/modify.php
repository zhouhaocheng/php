<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
<style>
body{
		background:url(images/denglv.jpg);
	}
</style>
</head>

<body>
<div align="center">
<?php
	include('conn.php');
	include('session.php');
	if(isset($_GET['xuehao'])){
		$xuehao = $_GET['xuehao'];
		$kmid = $_GET['kmid'];
		$sql = 'select * from cj where xuehao="'.$xuehao.'" and kmid = "'.$kmid.'"';
		$sql1 = 'select kmmc from kemu where kmid = "'.$kmid.'"';
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
		$r1 = mysql_query($sql1);
		$row1 = mysql_fetch_object($r1);
		$xuehao = $row->xuehao;
		$kmid = $row->kmid;
		$cj = $row->cj;
		$kmmc = $row1->kmmc;
		echo '<form action="modifydo.php" method="post">';
		echo '<p><h1 align="center">修改成绩信息</h1></p>';
		echo '<input type="hidden" name="xuehao" value="'.$xuehao.'"/>';
		echo "学号：$xuehao <br/>";
		echo '<input type="hidden" name="kmid" value="'.$kmid.'" />';
		echo "科目名称：$kmmc <br/>";
		echo '成绩：<input type="text" name="cj" value="'.$cj.'" /><br/>';
		echo '<input type="submit" value="修改" name="sub" />';	
		echo '<form>';
	}else{
		echo '<script>alert("请先选择需要修改的成绩");location.href="cxsy.php";</script>';
	}
?>
</div>
</body>
</html>