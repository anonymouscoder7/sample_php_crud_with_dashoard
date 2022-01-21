<?php include'db_connection.php';

$id = $_POST["id"];
$Name = $_POST["name"];
$Email = $_POST["email"];
$password = $_POST["password"];
$address = $_POST["address"];
$contact = $_POST["contact"];

$sql = "UPDATE admins SET Names='$Name', Email='$Email', Passwords='$password',Addresss='$address',Contact='$contact' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    header('location:../admin.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>