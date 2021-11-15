<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];
$connect = mysql_connect("localhost","root","","user");
mysql_select_db("user") or die("couldn't find database");
mysql_query("INSERT INTO about(name, email, comments)VALUES('$name', '$email', '$comments')");
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thanks for the review.Your reviews matter to us!!!')
    window.location.href='home.html';
    </SCRIPT>");
mysql_close($connect);
?>
</body>
</html>