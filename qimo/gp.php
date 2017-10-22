<?php
header ( "Content-type: text/html; charset=UTF-8" ); //设置文件编码格式
require_once 'src/jpgraph.php';     //导入Jpgraph类库
require_once 'src/jpgraph_bar.php';     //导入Jpgraph类库的柱状图功能
include('conn.php');
$sql = 'select kmid,kmmc from kemu '; 
$r  = mysql_query($sql);

while($row = mysql_fetch_array($r)){
	$datal[]=$row['kmmc'];
	$id = $row['kmid'];
	$sql1 = "select avg(cj) from cj where kmid = $id";
	$r1 = mysql_query($sql1);
	while($row1 = mysql_fetch_array($r1)){
		$datav[]=$row1['avg(cj)'];
	}
	//$datav[]=$row['kmid'];
}	
$graph = new Graph(800, 400);     //设置画布大小
$graph->SetScale('textlin');     //设置坐标刻度类型
$graph->SetShadow();    //设置画布阴影

$graph->img->SetMargin(40, 30, 20, 40);    //设置统计图边距
$barplot = new BarPlot($datav);    //实例化BarPlat对象

$graph->Add($barplot);
$barplot->SetFillColor("yellow");
$barplot->SetShadow();
$barplot->value->Show();
$graph->title->Set(iconv("utf-8","gb2312","各科平均成绩"));     //设置统计图标题
$graph->xaxis->title->Set(iconv("utf-8","gb2312","科目名称"));     //设置X轴名称
$graph->xaxis->SetTickLabels($datal);
$graph->yaxis->title->Set(iconv("utf-8","gb2312",'成绩（百分制）'));     //设置y轴名称
$graph->title->SetFont(FF_SIMSUN, FS_BOLD);     //设置标题字体
$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);    //设置X轴字体
$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);    //设置Y轴字体
$graph->Stroke();     //输出图像
mysql_free_result($r);
mysql_close($conn);
