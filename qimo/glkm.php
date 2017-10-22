<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>管理科目</title>
<style>
	body{
		background:url(images/index.jpg);
	}
</style>
</head>

<body>
<h1 align="center">所有科目信息</h1>
<?php
		include('session.php');
		include('conn.php');
		$sql = "SELECT kmid,kmmc FROM kemu;";
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
		if(!$row){
			echo '暂无成绩信息';
		}else{
			echo '<table align="center" width="70%" border="1" cellpadding="5">';   
			echo '<tr>';
			//echo '<td></td>';
			echo '<td>科目ID</td>';
			echo '<td>科目名称</td>';
			echo '<td>修改</td>';
			echo '<td>删除</td>';
			echo '</tr>';  
			do{
				echo '<tr>';
				echo '<td>'.$row->kmid.'</td>';
				echo '<td>'.$row->kmmc.'</td>';;
				echo '<td width="40"><a href="kmxg.php?kmid='.$row->kmid.'"><img src="update.gif"/></a></td>';
				echo '<td  width="40"><a href="kmdel.php?kmid='.$row->kmid.'" onclick="return cform();"><img src="delete.gif"/></a></td>';
				echo '</tr>';
		}while($row=mysql_fetch_object($r));
	}	
?>
	<tr>
	<td colspan="6" align="center">
	<input type='button' name='tj' value='添加' onClick="location.href='kmtj.php'">&nbsp;&nbsp;&nbsp;
	<input type='button' name='fh' value='返回' onClick="location.href='index.php'">
	
			
</body>
</html>