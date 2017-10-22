<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	include('conn.php');
	$plxh = $_POST['plxh'];
	$plkm = $_POST['plkm'];
	$plcj = $_POST['plcj'];
	
	for($i=0; $i<count($plxh); $i++){
		if(!empty($plcj[$i])){
		mysql_query('INSERT INTO cj(xuehao, kmid, cj) VALUES ("'.$plxh[$i].'","'.$plkm[$i].'","'.$plcj[$i].'")');
		}
	}
?>
<script>alert('添加成功');location.href='tjcj.php'</script>
</body>
</html>