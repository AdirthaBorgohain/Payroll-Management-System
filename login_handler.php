<?php
session_start();
$user = $_POST['uname'];
$pass = $_POST['psw'];

if($user == 'admin' && $pass == '1216'){
    header("location:admin_homepage.php");
} else {
    header("location:index.php?msg=false");
}