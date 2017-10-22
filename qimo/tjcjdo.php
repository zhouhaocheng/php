<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
	#to {
		font-size: 20px;
		text-align: center;	
	}
	body{
		background:url(images/index.jpg);
	}
	</style>
</head>

<body>

<h2 align="center">添加成绩</h2>

<?php
				include('conn.php');
				@$tjkm = $_POST['tjkm'];
				$sql1 = "select distinct kmmc from kemu where kmid='$tjkm'";
				$r1 = mysql_query($sql1);
				while($row = mysql_fetch_array($r1)){
					$kmmc1 = $row[0];
				}
				@$tjbj = $_POST['tjbj'];
				$sql2 = "SELECT name,xuehao FROM student WHERE banji='$tjbj'";
				$r2 = mysql_query($sql2);
				echo '<form action="tjcjdo1.php" method="post">';
				while($row1 = mysql_fetch_array($r2)){
					echo "<div id=to>";
					echo '姓名：'.$row1[0]. '&nbsp;&nbsp;&nbsp;&nbsp;学号：'.$row1[1].' &nbsp;&nbsp;&nbsp;&nbsp;'.$kmmc1.'成绩：';
					
					echo '<input type="hidden" name="plxh[]" value="'.$row1[1].'">';
					echo '<input type="hidden" name="plkm[]" value="'.$tjkm.'">';
					echo '<input type="text" name="plcj[]" />';
				}
				echo "<br>";
				echo "<br>";
				echo '<input type="submit" name="sub" value="批量添加"/>';echo "&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<input type='button' name='fh' value='返回' onClick=location.href='index.php'>";
				
				echo "</div>";
				echo '</form>';
			?>
</body>
</html>