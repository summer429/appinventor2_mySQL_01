<?php
include_once('include/connect_db.php');
//http://localhost/myweb/insert.php?username=jacky&password=123456&remark=
@$username=$_GET['username'];

echo $query="DELETE FROM `account` WHERE `username`='{$username}'";
$result=mysql_query($query);

//$num=mysql_affected_rows($result);  //取得資庫資料筆數
//echo $num;

//echo "NAME:".$username."</br>"."PW:".$password;
?>
