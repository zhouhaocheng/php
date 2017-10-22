<?php
	if(isset($_POST['yh'])){
		include('conn.php');
		$name = $_POST['yh'];
		$passwd = $_POST['mm'];
		$mail = $_POST['yx'];
		$iphone = $_POST['hm'];
		$adderss = $_POST['dz'];
		$sql="insert into user (name,passwd,mail,iphone,address) values ('$name','$passwd','$mail','$iphone','$adderss')";
		$row=mysql_query($sql);
		if($row){
			echo "<script> alert('注册成功;');location.href='denglv.php';</script>"; 
		}else{
			"<script> alert('注册失败;')</script>"; 
		}	
	}
?>