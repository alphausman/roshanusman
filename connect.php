<?php
$host = "localhost"; 
$dbname="roshan";
$user = "root";
$password = "";
$conn = mysqli_connect($host,$user,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>