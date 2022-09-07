<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
<div class="container">


<?php

use PhpMyAdmin\Rte\Triggers;

$uname = "deniz";
$denizpassword = "123456";



if  ($_POST['username'] == $uname && $_POST['password'] == $denizpassword ) echo"giriş başarılı!";
else {
  if ($_POST['username'] != $uname && $_POST['username'] != null) echo"username is wrong!"." "; 
if ($_POST['password'] != $denizpassword && $_POST['password'] != null)echo"password is wrong!";
}





?>

<div style="margin:0 auto 0 auto;width: 170px;height: 90px; border: 2px black solid;">
<form action="" method="POST" name="loginpannel">
<input type="text" name="username" placeholder="enter your username">
<input type="password" name="password" placeholder="enter your password">
<button type="submit" name="buttton" style="float: right; margin: 2px 0 0 0;"> login </button>
<div style="float: left; margin: -5px 0 0 6px;">
<a href="register page" style="font-size: 7px; color:blue; text-decoration: none;">dont have an account?</a>
</div>
</form> 

</div>
</div>
</body>
</html>