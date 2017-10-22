<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>学生信息查询中心</title>
<style type="text/css">
	#to {
		font-size: 30px;
		text-align: center;
	}
	#us{
		font-size: 20px;
	}
	#too a{
		float:right;
		font-size: 20px;
		padding: 0 10px;
		margin: 0px;
	}
	body{
		background:url(images/index.jpg);
	}
</style>
</head>
<body>
<div id="too">
<?php
	session_start();
	if (isset($_GET['logout'])){
		unset($_SESSION['name']);
		echo '<script>alert("已退出");location.href="denglv.php";</script>';
	}
	if(isset($_SESSION['passwd'])){
	}else{
		echo '<script>alert("请先登录");location.href="denglv.php";</script>';
	}	
	echo '<p id="us">当前用户：';
		$_SESSION['passwd'];
		echo $_SESSION['user'];
		echo "<a href='denglv.php?logout=1'>退出登录</a>";
		echo '<a href="index.php">返回</a>';		
	echo '</p>';
?>
	<p id="to">学生信息查询中心</p>
</div>
<div align="center">
	<form action="" method="post">
		学号：<input type="text" name="cxxh">
		<input type="submit" name="submit" value="查询">
		<a href="cxsy1.php"><input type="button" value="查看学生所有信息"></a>
		<a href="tjxx.php"><input type="button" value="添加学生信息"></a>
	</form>
	<?php	
		include('conn.php');
		if(isset($_POST['submit'])){
			$submit = $_POST['submit'];
			$cxxh = $_POST['cxxh'];
			if(isset($cxxh)){
				$sql = 'SELECT * FROM student WHERE xuehao="'.$cxxh.'"';
			}
			$r = mysql_query($sql);
			@$row = mysql_fetch_object($r);
			if(!$row){
				echo '无查询结果';
			}else{
				echo '<table align="center" width="70%" border="1" cellpadding="5">';   
				echo '<tr>';				
				echo '<td>学号</td>';
				echo '<td>姓名</td>';
				echo '<td>性别</td>';
				echo '<td>班级</td>';
				echo '<td>修改</td>';
				echo '<td>删除</td>';
				echo '</tr>';
				do{
					echo '<tr>';
					echo '<td>'.$row->xuehao.'</td>';
					echo '<td>'.$row->name.'</td>';
					echo '<td>'.$row->xingbie.'</td>';
					echo '<td>'.$row->banji.'</td>';
					echo '<td width="40"><a href="modify1.php?xuehao='.$row->xuehao.'"><img src="update.gif"/></a></td>';
					echo '<td width="40"><a href="del.php?xuehao='.$row->xuehao.'" onclick="return cform();"><img src="delete.gif"/></a></td>';
					echo '</tr>';

				}while($row=mysql_fetch_object($r));
			}
		}
?>
</div>	
</body>
</html>