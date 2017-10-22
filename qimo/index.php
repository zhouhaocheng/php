<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页</title>
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
		echo '<a href="mima.php">修改密码</a>';
		echo "<a href='message.php'>查看学生信息</a>";
		echo "<a href='glkm.php'>管理科目</a>";
	echo '</p>';
?>
	<p id="to">成绩查询中心</p>
</div>
<div align="center">
	<form action="" method="post">
		学号：<input type="text" name="cxxh">
	<?php
		echo "科目：<select name='cxkm'>";
		echo "<option value='666'></option>";
		include('conn.php');
		$sql = "select * from kemu";
		$r = mysql_query($sql);
		while($row = mysql_fetch_array($r)){		
			echo "<option value='".$row['kmmc']."'>{$row['kmmc']}</option>";
		}
		echo "</select>";
		?>
		<input type="submit" name="submit" value="查询">
		<a href="cxsy.php"><input type="button" value="查看所有成绩"></a>
		<a href="tjcj.php"><input type="button" value="添加学生成绩"></a>
	</form>	
	<?php		
		include('conn.php');
		if(isset($_POST['submit'])){
			$submit = $_POST['submit'];
			$cxxh = $_POST['cxxh'];
			$cxkm = $_POST['cxkm'];
			if(isset($cxxh) and $cxkm == '666'){
				$sql = 'SELECT cj.xuehao,cj.kmid,student.name,kemu.kmmc,cj.cj from cj LEFT JOIN student ON cj.xuehao=student.xuehao LEFT JOIN kemu ON kemu.kmid=cj.kmid WHERE cj.xuehao="'.$cxxh.'"' ;
				//include('gp1.php');
			}
			if(isset($cxxh) and $cxkm != '666'){
				$sql = 'SELECT cj.xuehao,cj.kmid,student.name,kemu.kmmc,cj.cj FROM cj LEFT JOIN student ON cj.xuehao=student.xuehao LEFT JOIN kemu ON kemu.kmid=cj.kmid WHERE cj.xuehao='.$cxxh.' and kemu.kmmc="'.$cxkm.'";';				
			}
			$r = mysql_query($sql);
			$row = mysql_fetch_object($r);
			if(!$row){
				echo '无查询结果';
			}else{
				echo '<table align="center" width="70%" border="1" cellpadding="5">';   
				echo '<tr>';				
				echo '<td>学号</td>';
				echo '<td>姓名</td>';
				echo '<td>科目</td>';
				echo '<td>成绩</td>';
				echo '<td>修改</td>';
				echo '<td>删除</td>';
				echo '</tr>';
				do{
					echo '<tr>';
					echo '<td>'.$row->xuehao.'</td>';
					echo '<td>'.$row->name.'</td>';
					echo '<td>'.$row->kmmc.'</td>';
					echo '<td>'.$row->cj.'</td>';
					echo '<td width="40"><a href="modify.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'"><img src="update.gif"/></a></td>';
					echo '<td  width="40"><a href="del.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'" onclick="return cform();"><img src="delete.gif"/></a></td>';
					echo '</tr>';
					
				}while($row=mysql_fetch_object($r));
			}
		}
?>
</div>
</body>
</html>