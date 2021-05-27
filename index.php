<?php 
$handle = opendir('./'); //当前目录
while (false !== ($file = readdir($handle))) { //遍历该php教程文件所在目录
list($filesname,$extension)=explode(".",$file);//获取扩展名
if ($extension=="gif" or $extension=="jpg" or $extension=="png") { //文件过滤
if (!is_dir('./'.$file)) { 
$array[]=$file;
}
}
}
$randpic=array_rand($array); 
header("HTTP/1.1 302 Found");
$url = $array[$randpic];
$url = "http://".$_SERVER['HTTP_HOST']."/pic/randsb/".$url;
header( "Location: $url" ); 
?>
Hello Raki