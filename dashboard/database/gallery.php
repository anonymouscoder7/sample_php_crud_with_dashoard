<?php include'db_connection.php';

if(isset($_POST['upload']))
{
    $image = $_FILES['image']['name'];

    // image file directory
    $target_img = "gallery/" . basename($image);

    $id = 1;
    $sql = "INSERT INTO gallery (image) VALUES ('$image')"; 

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_img)) {
        $msg = "Image uploaded successfully";
      } else {
        $msg = "Failed to upload image";
      }
    
      if ($conn->query($sql) === TRUE) {
        echo "<h1>Sucessfully Updated</h1>";
        header('location:../gallery.php');
      }
    
      $conn->close();
    
}
if (isset($_GET['id'])) {
    $sn = $_GET['id'];
    echo $sn;
	$sql = "DELETE FROM gallery WHERE ID = '$sn' ";
    if ($conn->query($sql) === TRUE) {
        header('location:../gallery.php');
    }
}
?>