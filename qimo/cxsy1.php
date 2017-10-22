<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
	body{
		background:url(images/index.jpg);
	}
</style>
</head>
<body>
<h1 align="center">所有学生信息</h1>
<?php
	include('session.php');
		include('conn.php');
		$sql = "SELECT * FROM student";
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
		if(!$row){
			echo '暂查无信息';
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
				echo '<td  width="40"><a href="del1.php?xuehao='.$row->xuehao.'" onclick="return cform();"><img src="delete.gif"/></a></td>';
				echo '</tr>';
			}while($row=mysql_fetch_object($r));
		}	
?>
	<tr>
	<td colspan="6" align="center">
	<input type='button' name='fh' value='返回' onClick="location.href='message.php'">			
</body>
</html>