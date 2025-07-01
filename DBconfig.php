<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="codeone";

    $link=new mysqli($server,$username,$password,$database);

    if($link->connect_error)
    {
        die("connection_failed:".$link->connect_error);
    }
?>
