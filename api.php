<?php  
 
$info = $_POST['info'];
$userid = '';
$apiKey=""; //你的appkey 换成你自己图灵api的key
$apiURL="http://www.tuling123.com/openapi/api?key=$apiKey&info=$info&userid=$userid";
$res=file_get_contents($apiURL);

$res_list=json_decode($res,true);

echo $res_list['text'];


//写入文件
$myfile = fopen("note.txt", "a+") or die("Unable to open file!");
$txt = $info.' '.date("Y-m-d H:i:s",time())."\r\n";
fwrite($myfile, $txt);

fclose($myfile);

?> 
