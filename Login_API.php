<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
require_once "DBConfig.php";
session_start();
$username=$_POST['username']??'';
$password=$_POST['password']??'';
$result=$link->query ("SELECT * FROM codeone_table WHERE username= '$username' AND password= '$password'");
if (mysqli_num_rows($result)>0) 
{
    $_SESSION['username'] = $username;
    header("#");
    exit;
       /*echo '<script type="text/javascript">
       window.onload=function(){alert("Login success!");
       window.location.href="Dashboard.html";}</script>';*/
}
else 
{
    echo '<script type="text/javascript">
    window.onload= function()
    {alert("Please give valid username or password");
     window.location.href= "index.html";
    }</script>';
}
?>
