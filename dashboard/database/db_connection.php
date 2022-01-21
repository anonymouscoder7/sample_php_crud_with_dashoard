<?php
$servername = "localhost";
$username = "root";
$password = "";
$select_db = "lab";

// Create connection
$conn = new mysqli($servername, $username, $password, $select_db);

//Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>