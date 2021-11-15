<?php
$database="user"; //database name
error_reporting(E_ALL ^ E_DEPRECATED);
$username=$_POST['username'];
$password=$_POST['password'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    
    }
    mysql_select_db("$database", $con);
$query = "DELETE FROM signup WHERE username='$username' and password='$password'";
mysql_query($query);

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Account Deleted')
    window.location.href='home.html';
    </SCRIPT>");


mysql_close();
?>
