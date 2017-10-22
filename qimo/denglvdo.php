<?php
	include("conn.php");
	if(isset($_POST['sub'])){		
		$user = $_POST['yh'];
		if(empty($user)){
					echo "<script>alert('请输入用户名');location.href='denglv.php';</script>"	;}
		$passwd = $_POST['mm'];
		if(empty($passwd)){
					echo "<script>alert('请输入密码');location.href='denglv.php';</script>"	;}
		if(empty($yzm)){
		$yzm = $_POST['yzm'];
				session_start();
				$s=$_SESSION['r'];
			if($yzm!=$s){
					echo "<script>alert('验证码错误！');location.href='denglv.php';</script>";
						exit;}
		}
		@$sql="select * from user where name='$user' and passwd =  '$passwd'";
		@$rw=mysql_query($sql);
		$row = mysql_num_rows($rw);
		$ro = mysql_fetch_array($rw);
		$_SESSION['user'] = $ro['name'];
		$_SESSION['passwd'] = $ro['passwd'];
		$_SESSION['id']=$ro['id'];
		if($row>=1){
			$_SESSION['type'] = 0;
			echo "<script> alert('登录成功');location.href='index.php';</script>";
		}else{
			echo "<script>alert('用户名或密码错误');</script>";
			}
	}
?>
