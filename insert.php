<?php
include_once('include/connect_db.php');
//http://localhost/myweb/insert.php?username=jacky&password=123456&remark=
$username=$_GET['username'];
$password=$_GET['password'];
$remark=$_GET['remark'];

/* 無檢查是否重複，直接insert
$query="INSERT INTO `account`(`id`,`username`,`password`,`remark`) VALUE ('','{$username}','{$password}','{$remark}')";
$result=mysql_query($query);
if($result)
{
	echo 'true';
}
else
{
	echo 'false';
}

*/ 
// 有檢查是否重複，不重複才insert，重複時回傳repeat
$sql="SELECT * FROM `account` WHERE `username`='$username'";
$result=mysql_query($sql);
$nums=mysql_num_rows($result);
if($nums > 0){
	while($row=mysql_fetch_array($result)){
		$db_name=$row['username'];
	}
	if($username==$db_name){
		echo "repeat";
	}
}
else{
	echo "ok";
	$query="INSERT INTO `account`(`id`,`username`,`password`,`remark`) VALUE ('','{$username}','{$password}','{$remark}')";
	$result=mysql_query($query);
	
}


?>