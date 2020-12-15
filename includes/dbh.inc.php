<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "fundraiser";


// create Database connection
$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
// checking for Database connection
if($conn -> connect_error) {
    die("connection failed:".$conn->connect_error);
}