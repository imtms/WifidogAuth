<?php
$host=;
$username=;
$password=;
mysql_connect($host,$username,$password) or die('连接数据库失败!');
mysql_select_db('') or die('选择数据库失败!');
if($_GET[token]==NULL){
	$ip=$_GET[ip];
$query = "INSERT INTO wifidog(ip) VALUE('$ip')";  
$result=mysql_query($query);
$sql="select mac from wifidog where mac='".$_GET[mac]."'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
 if ($row!=NULL){print_r("Auth: 1");}
 else {print_r("Auth: 0");}
 
}
else{
	$to=$_GET[token];
	$ma=$_GET[mac];
	$ip=$_GET[ip];
	$query = "Select mac from wifidog where ip=$ip";  
	$result=mysql_query($query);
	if($result!=NULL){
	$query = "INSERT INTO wifidog(user, mac) VALUE('$to', '$ma') where ip=$ip";  
	$result=mysql_query($query);}

$sql="select mac from wifidog where mac='".$_GET[mac]."'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
 if ($row!=NULL){print_r("Auth: 1");}
 else {print_r("Auth: 0");}
 
}
?>