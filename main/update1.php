<?php
$database="user"; //database name
error_reporting(E_ALL ^ E_DEPRECATED);
$username=$_POST['username'];
$newuser=$_POST['newuser'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    
    }
    mysql_select_db("$database", $con);

$query = "UPDATE signup SET username='$newuser' WHERE username='$username'";
mysql_query($query);

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Password Updated')
    window.location.href='home.html';
    </SCRIPT>");


mysql_close();
?>
