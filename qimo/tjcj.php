<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>添加成绩信息</title>
<style>
	body{
		background:url(images/index.jpg);
		}
	#to {
		font-size: 30px;
		text-align: center;
	}
</style>
</head>

<body>
<div align="center">
<h1 id="to">以班级为单位添加成绩信息</h1>
<form action="tjcjdo.php" method="post">
		<table>	<tr>
				<td>
				<h3>班 级：</td>
				<td>
					<h3><select name="tjbj">
				<?php
					include('session.php');	
					include('conn.php');
					$sql = "select distinct banji from student;";	
					$r = mysql_query($sql);	
					while($row = mysql_fetch_array($r)){
						echo "<option value=".$row[0].">".$row[0]."</option>";
							}
				?>
				</select></h3></td></tr></br>
				<tr>
			<td><h3>科目名称：</td>
				<td>
				<select name="tjkm">
					<?php	
					include('conn.php');
					$sql1 = "select distinct kmmc,kmid from kemu;";
				    $r1 = mysql_query($sql1);
						while($row1 = mysql_fetch_array($r1)){
						echo "<option value=".$row1[1].">".$row1[0]."</option>";
							}
						?>
				</select></br></h3></td>
				</tr></table>
			<input type="submit" name="tj" value="添加"/>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type='button' name='fh' value='返回' onClick=location.href='index.php'>
			</form>
			
</div>
</body>
</html>