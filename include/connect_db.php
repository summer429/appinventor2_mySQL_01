<?php 
$host='localhost';
$username='root';
$password='root';
$db='my_test_db';
$con=mysql_connect($host,$username,$password) or die("Error~~");
$db=mysql_select_db($db);
//echo $con;
?>