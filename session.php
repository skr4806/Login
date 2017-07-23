<?php
include('db.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("SELECT * FROM users WHERE email='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['f_name'] . " " . $row['l_name'];
if(!isset($login_session))
{
header("Location:index.php");
}
?>