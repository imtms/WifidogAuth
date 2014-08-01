<?php
if($_GET[url]!=NULL){
header("location:http://".$_GET[url]);}
else
{header("location:http://www.baidu.com");}
?>

<!DOCTYPE html>
<html lang="utf-8">
<head>
<title>欢迎界面</title>
<meta charset="utf-8"/>
</head>
<body>
<center>
<h1>你已经成功登录网络！</h1><br />
<a href="http://self:2060/wifidog/auth?logout=1&token="><h2>点此退出<h2></a>
</center>
</body>
</html>

