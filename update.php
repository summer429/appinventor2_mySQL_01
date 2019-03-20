<?php
include_once('include/connect_db.php');
//http://localhost/myweb/insert.php?username=jacky&password=123456&remark=
$username=$_GET['username'];
$password=$_GET['password'];
$remark=$_GET['remark'];
$query="UPDATE `account` SET `username`='{$username}',`password`='{$password}',`remark`='{$remark}' WHERE `username`='{$username}'";
$result=mysql_query($query);
if($result)
{
	echo true;
}
else
{
	echo false;
}

//echo "NAME:".$username."</br>"."PW:".$password;
?>

<!DOCTYPE html>
<html>
<body>
<!---
<form action='' method="get">
username:<input type='text' name="username" /></br>
password:<input type='text' name="password" /></br>
remark:<input type='text' name="remark"></br>
<input type="submit" value="SEND" />
</form>
---!>

</body>

</html>