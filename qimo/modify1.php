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
	include('session.php');
	include('conn.php');
	if(isset($_GET['xuehao'])){
		$xuehao = $_GET['xuehao'];
		$sql = 'SELECT * FROM student WHERE xuehao="'.$xuehao.'"';	
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
		$xuehao = $row->xuehao;
		$name = $row->name;
		$xingbie = $row->xingbie;
		$banji = $row->banji;
		echo '<form action="modifydo1.php" method="post">';
		echo '<p>修改学生信息</p>';
		echo '<input type="hidden" name="xuehao" value="'.$xuehao.'"/>';
		echo '学号：<input type="text" name="xuehao" value="'.$xuehao.'" /><br/>';
		echo '姓名：<input type="text" name="name" value="'.$name.'" /><br/>';
		echo '性别：<input type="text" name="xingbie" value="'.$xingbie.'" /><br/>';
		echo '班级：<input type="text" name="banji" value="'.$banji.'" /><br/>';
		echo '<input type="submit" value="修改" name="sub" />';echo '&nbsp;&nbsp;&nbsp;';
		echo '<a href="cxsy1.php"><input type="button"  value="返回"></a>';
		echo '<form>';
	}else{
		echo '<script>alert("请先选择需要修改的学生");location.href="message.php";</script>';
	}
?>

</div>
</body>
</html>