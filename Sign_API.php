<?php

require_once "DBconfig.php";

$fullname = $_POST['Fullname'] ?? '';
$username=$_POST['username']??'';
$password=$_POST['password']??'';
$emailId=$_POST['email']??'';
$mobileNumber=$_POST['number']??'';
$DOB=$_POST['dob']??'';
$qualification=$_POST['qualification']??'';
$location=$_POST['location']??'';
$sql="INSERT INTO codeone_table(fullname,username,password,email,number,dob,qualification,location) 
VALUES ('$fullname','$username','$password','$emailId','$mobileNumber','$DOB','$qualification','$location')";
if($link->query($sql)===TRUE)
{
    echo '<script type="text/javascript">
window.onload=function(){alert("Registeration success!");
window.location.href="login.html";}</script>';
}
else
{
    echo '<script type="text/javascript">
window.onload=function(){alert("Error please try again later!");
window.location.href="index.html";}</script>';

}
?>