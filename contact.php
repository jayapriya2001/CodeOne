<?php
require_once "DBconfig.php";
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$phone= $_POST['phone'] ?? '';
$project = $_POST['project'] ?? '';
$subject= $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';
$sql="INSERT INTO codeone_contact(fullname,email,phone,project,subject,message) VALUES ('$fullname','$email','$phone','$project','$','$message')";
if($link->query($sql)===TRUE)
{
        echo '<script type="text/javascript">
        window.onload = function() {
            alert("Message submitted successfully!");
            window.location.href = "index.html";
        }
    </script>';
} else {
    echo '<script type="text/javascript">
        window.onload = function() {
            alert("Error! Please try again later.");
            window.location.href = "index.html";
        }
    </script>';
}
?>