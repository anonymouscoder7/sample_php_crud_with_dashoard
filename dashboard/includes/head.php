<?php
session_start();

if (!isset($_SESSION['uName'])) {
    echo 'you are not log in';
    header('Location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin-Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!--Top Nav-->
    <section class="top-nav">
        <div class="top-nav-content">
            <div class="left_area">
                <h3>Scripting Language Lab</h3>
            </div>
        </div>
    </section>
    <section>
        <div class="sidebar">
            <center>
                <img src="images/user.jpg"  alt="admin" style=" height:200px; border-radius: 50%; ">
                <h4 class="user-name"><?php echo $_SESSION['uName'] ?></h4>
            </center>
            <hr style="background-color:chartreuse;">
            <a href="dashboard.php"> <i class="fas fa-home"></i><span> Dashboard</span></a>
            <a href="admin.php"> <i class="fas fa-user "></i><span>Admin</span></a>
            <a href="content.php"> <i class="fas fa-book "></i><span>Content</span></a>
            <a href="gallery.php"> <i class="fas fa-image "></i><span>Gallery</span></a>
            <a href="contact.php"> <i class="fas fa-book "></i><span>Contact</span></a>
            <a href="logout.php"> <i class="fas fa-lock "></i><span>Logout</span></a>
        </div>
    </section>