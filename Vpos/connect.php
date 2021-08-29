<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_pi";

$table_input = "table_pi";
$table_master = "master_pi"; 

// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
// if ($connect->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>