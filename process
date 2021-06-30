<?php

$username = $_POST['username'];
$username = $_POST['password'];

//prevent mysql injection
$username= stripcslashes($username);
$username= stripcslashes($password);
$username= mysql_real_escape_string($username);
$username= mysql_real_escape_string($password);

//connect to the server and select database

mysql_connect("localhost","root","");
mysql_select_db("login");

//qury the database for user
$result = mysql_query("select * from users where username = '$username' and password = 'password'")
             or die("Failed to query database" .mysql_error());

 $row = mysql_fetch_array($result);
 if($row['username'] == $username && $row['password'] == $password){
 	header('Location: videos.php');

 }
 else {
 	header('Location: student.php');
 }


