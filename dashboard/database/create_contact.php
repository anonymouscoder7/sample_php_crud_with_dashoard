<?php include'db_connection.php';

$Name = $_POST["name"];
$contact = $_POST["contact"];
$message = $_POST["message"];


$sql = "INSERT INTO contact (Names,Contact, Messages ) VALUES ('$Name', '$contact', '$message')";

if ($conn->query($sql) === TRUE) {
    header('location:../../index.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>