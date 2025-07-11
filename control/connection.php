<?php 
$host="localhost";
$user="root";
$pass="";
$db= "SMC_web";

$conn= new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo "failed to connect to database".$conn->connect_error;

} 
?>