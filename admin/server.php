<?php
require_once "config/config.php";
if(!isset($_POST['username']))
{
    die('No username');
}
if(!isset($_POST['password']))
{
    die('No password');
}
$username = $_POST['username'];
$password = $_POST['password'];
$db = connecttodb();
$result = mysqli_query($db,"SELECT username,password FROM admin WHERE username = '$username' AND password = '$password'");
if(mysqli_num_rows($result) == 1)
{
    setcookie("username",$username,time()+36000,"/");
    header("Location: /admin/index.php");

}
else
{
    echo "Wrong username or password";
}
?>