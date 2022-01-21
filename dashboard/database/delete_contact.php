<?php include 'db_connection.php';

if (isset($_GET['id'])) {
    $sn = $_GET['id'];
    echo $sn;
	$sql = "DELETE FROM contact WHERE ID = '$sn' ";
    if ($conn->query($sql) === TRUE) {
        header('location:../contact.php');
    }
}
?>