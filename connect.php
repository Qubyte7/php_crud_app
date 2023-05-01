<?php
$connection=new mysqli('localhost',
'root','','app1php');//the space left is because i don't have the password in my database

if(!$connection){
    die(mysqli_error($connection));
}
?>