<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	session_start();
	if(isset($_SESSION['passwd'])){
	}else{
		echo '<script>alert("请先登录");location.href="denglv.php";</script>';
	}
	?>
</body>
</html>