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
<h1 align="center">所有学生成绩信息</h1>
<?php
		include('session.php');
		include('conn.php');
		$sql = 'select distinct cj.xuehao,cj.kmid,student.name,kemu.kmmc,cj.cj from cj,student,kemu where student.xuehao=cj.xuehao and kemu.kmid=cj.kmid';
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
		if(!$row){
			echo '暂无成绩信息';
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
?>
	<tr>
	<td colspan="6" align="center">
	<input type='button' name='avg' value='查看各科平均成绩' onClick="location.href='gp.php'">&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='button' name='avg' value='查看各科最高成绩' onClick="location.href='gp1.php'">&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='button' name='avg' value='查看各科最低成绩' onClick="location.href='gp2.php'">&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='button' name='fh' value='返回' onClick="location.href='index.php'">
			
</body>
</html>