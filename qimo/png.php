<?php
header("Content-type:image/png");    //����ͷ����Ϣ������png��ͼƬ�ļ�
$str = 'abcdefghijkmnpqrstuvwxyz1234567890'; 
$l = strlen($str);       //�õ��ִ��ĳ���; 
$authnum = '';
for($i=1;$i<=4;$i++){ 
    //$num=rand(0,$i-1);      //ÿ�������ȡһλ����
	$num=rand(0,$l-1); 
    $authnum.= $str[$num];     //��ͨ�����ֵ������ַ�������һ������λ;
}
srand((double)microtime()*1000000);
$im = imagecreate(80,30);    //ͼƬ�����; 
$black = imagecolorallocate($im, 0,0,0);
$white = imagecolorallocate($im, 255,255,255);
$gray = imagecolorallocate($im, 200,200,200); 
imagefill($im,168,160,$black);    //����λ������֤�����ͼƬ
imagestring($im, 15, 18, 6, $authnum, $white);    //�ַ���ͼƬ��λ��;
imagepng($im);
imagedestroy($im);
session_start();
$_SESSION['r']=$authnum;
?>