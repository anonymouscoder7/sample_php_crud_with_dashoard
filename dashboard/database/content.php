<?php include'db_connection.php';

if(isset($_POST['nav']))
{
    $image = $_FILES['image']['name'];

    // image file directory
    $target_img = "images/" . basename($image);

    $id = 1;
    $sql = "UPDATE content SET nav_img='$image' WHERE ID='$id' "; 

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_img)) {
        $msg = "Image uploaded successfully";
      } else {
        $msg = "Failed to upload image";
      }
    
      if ($conn->query($sql) === TRUE) {
        echo "<h1>Sucessfully Updated</h1>";
        header('location:../content.php');
      }
    
      $conn->close();
    
}
if(isset($_POST['protofilo']))
{
    $image = $_FILES['image']['name'];

    // image file directory
    $target_img = "images/" . basename($image);

    $id = 1;
    $sql = "UPDATE content SET protofilo_img='$image' WHERE ID='$id' "; 

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_img)) {
        $msg = "Image uploaded successfully";
      } else {
        $msg = "Failed to upload image";
      }
    
      if ($conn->query($sql) === TRUE) {
        echo "<h1>Sucessfully Updated</h1>";
        header('location:../content.php');
      }
    
      $conn->close();
    
}
if(isset($_POST['contact']))
{
    $image = $_FILES['image']['name'];

    // image file directory
    $target_img = "images/" . basename($image);

    $id = 1;
    $sql = "UPDATE content SET contact_img='$image' WHERE ID='$id' "; 

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_img)) {
        $msg = "Image uploaded successfully";
      } else {
        $msg = "Failed to upload image";
      }
    
      if ($conn->query($sql) === TRUE) {
        echo "<h1>Sucessfully Updated</h1>";
        header('location:../content.php');
      }
    
      $conn->close();
    
}
if(isset($_POST['user']))
{
    $image = $_FILES['image']['name'];

    // image file directory
    $target_img = "images/" . basename($image);

    $id = 1;
    $sql = "UPDATE content SET user_img='$image' WHERE ID='$id' "; 

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_img)) {
        $msg = "Image uploaded successfully";
      } else {
        $msg = "Failed to upload image";
      }
    
      if ($conn->query($sql) === TRUE) {
        echo "<h1>Sucessfully Updated</h1>";
        header('location:../content.php');
      }
    
      $conn->close();
    
}
if(isset($_POST['about_one']))
{
    $about = $_POST['about_1'];
    $id = 1;
    $sql = "UPDATE content SET about1='$about' WHERE ID='$id' "; 
    if ($conn->query($sql) === TRUE) {
        echo "<h1>Sucessfully Updated</h1>";
        header('location:../content.php');
      }
    
      $conn->close();

}  
if(isset($_POST['about_two']))
{
    $about = $_POST['about_2'];
    $id = 1;
    $sql = "UPDATE content SET about2='$about' WHERE ID='$id' "; 
    if ($conn->query($sql) === TRUE) {
        echo "<h1>Sucessfully Updated</h1>";
        header('location:../content.php');
      }
    
      $conn->close();

}      
?>