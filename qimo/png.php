<?php
header("Content-type:image/png");    //发送头部信息，生成png的图片文件
$str = 'abcdefghijkmnpqrstuvwxyz1234567890'; 
$l = strlen($str);       //得到字串的长度; 
$authnum = '';
for($i=1;$i<=4;$i++){ 
    //$num=rand(0,$i-1);      //每次随机抽取一位数字
	$num=rand(0,$l-1); 
    $authnum.= $str[$num];     //将通过数字得来的字符连起来一共是四位;
}
srand((double)microtime()*1000000);
$im = imagecreate(80,30);    //图片宽与高; 
$black = imagecolorallocate($im, 0,0,0);
$white = imagecolorallocate($im, 255,255,255);
$gray = imagecolorallocate($im, 200,200,200); 
imagefill($im,168,160,$black);    //将四位整数验证码绘入图片
imagestring($im, 15, 18, 6, $authnum, $white);    //字符在图片的位置;
imagepng($im);
imagedestroy($im);
session_start();
$_SESSION['r']=$authnum;
?>