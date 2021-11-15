<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$connect = mysql_connect("localhost","root","","user");
mysql_select_db("user") or die("couldn't find database");
mysql_query("INSERT INTO signup(fname, lname, email, username, password)VALUES('$fname', '$lname', '$email', '$username', '$password')");
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thanks for registering')
    window.location.href='home.html';
    </SCRIPT>");
mysql_close($connect);
?>