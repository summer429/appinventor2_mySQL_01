<?php
include_once('include/connect_db.php');
//http://localhost/myweb/insert.php?username=jacky&password=123456&remark=
@$username=$_GET['username'];
@$password=$_GET['password'];
@$remark=$_GET['remark'];
$query="SELECT * FROM `account`";
$result=mysql_query($query);
//print_r($result);
$num=mysql_num_rows($result);  //取得資庫資料筆數
for($i=0;$i<$num;$i++)
{
	$row=mysql_fetch_assoc($result);
    echo $row['id'].",".$row['username'].",".$row['password'].",".$row['remark'];
	echo ";";
}

//echo "NAME:".$username."</br>"."PW:".$password;
?>
