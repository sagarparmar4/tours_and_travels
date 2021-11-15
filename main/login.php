<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if ($username&&$password)
{
$connect = mysql_connect("localhost","root","","user");
mysql_select_db("user") or die("couldn't find database");
$query = mysql_query("select * from signup where username='$username'");
$numrows = mysql_num_rows($query);

if($numrows!=0)
{
while($row = mysql_fetch_assoc($query))
{
$dbusername = $row['username'];
$dbpassword = $row['password'];

}
if($username==$dbusername&&$password==$dbpassword)
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Login Succesfull')
    window.location.href='home.html';
    </SCRIPT>");
$_SESSION['username']= $dbusername;
}
else
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Incorrect Password')
    window.location.href='index.html';
    </SCRIPT>");
}
else
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Please enter correct username and password')
    window.location.href='index.html';
    </SCRIPT>");
}
else
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('That username doesnt exist')
    window.location.href='index.html';
    </SCRIPT>");
mysql_close($connect);
?>
</body>
</html>
