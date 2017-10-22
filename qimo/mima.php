<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改密码</title>
<style type="text/css">
	#top{
		height:100px;
	}
	#top p {
		font-size: 40px;
		padding:  20px;
		text-align:center;
	}
	table  {
		margin:auto;
	}
	table tr td {
		margin:auto;
		font-size:30px;
	}
	table tr td input{
		margin:auto;
		font-size:30px;
	}
	#center{
		height:100px;
	}
	.error{
		background: gray;
	}
	body{
		background:url(images/index.jpg);
	}
</style>
</head>
<body>
<div id="top">
	<p><b>修 改 密 码</b></p>
</div>
<div>
</div>
<form action="" method="post">
	<table>
		<tr>
			<td>用 户：</td>
			<td><input type="text" name="name" value="<?php
				// include('session.php');
				   session_start();
					echo $_SESSION['user'];	
				?>">
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>原密码：</td>
			<td><input type="password" name="passwd1"></td>
		</tr>
			<tr><td>&nbsp;</td></tr>
		<tr>
			<td>新密码</td>
			<td><input type="password" name="passwd2"></td>
		</tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>&nbsp;</td></tr>
		<tr>
			<td align="center"><input type="submit" name="sub" value="修改"></td>
			<td align="center"><input type="button" name="but" value="返回" onClick="location.href='index.php'"</td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['sub'])){
    	$user = $_POST['name'];
		$id = $_SESSION['id'];
		if(empty($_POST['passwd1']) or empty($_POST['passwd2'])){
			echo "<script>alert('密码不能留空;');</script>";
		    exit;
		}
		$newpasswd = $_POST['passwd2'];
		if($_POST['passwd1'] == $newpasswd){
			echo "<script>alert('两个密码一样;');</script>";
			exit;
		}
		include('conn.php');
		$sqlmm = 'SELECT passwd FROM user WHERE name="'.$user.'"';
		$r = mysql_query($sqlmm);
		while($rel = mysql_fetch_array($r)){
        	$oldpasswd = $rel[0];
		}
		if($oldpasswd !== $_POST['passwd1']){
			echo "<script>alert('原密码不正确;');</script>";
			exit;
		}
		$sql = 'UPDATE user SET passwd="'.$newpasswd.'" WHERE name="'.$user.'"';
		$row = mysql_query($sql);
		if($row){
			echo '<script>alert("修改成功");location.href="denglv.php";</script>';
		}else{
			echo '<script>alert("修改失败");location.href="mima.php?id='.$id.'";</script>';
		}
	}
?>
</body>
</html>