<?php include 'includes/head.php'; ?>
<section>
    <div class="page-head">
        <h3>Content</h3>
    </div>
    <br>
    <div class="row">
        <div class="card" style="margin-left: 18%; width: 18rem;">
            <img class="card-img-top" src="database/images/<?php include 'database/db_connection.php';
                            $sql = "SELECT * FROM content";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            echo $row['nav_img'];
                            ?> " alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Top Nav Image</p>
               <form action="database/content.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image">
                    <input type="submit" name="nav" class="btn btn-primary" value="Save">
               </form>
            </div>
        </div>

        <div class="card" style="margin-left: 2%; width: 18rem;">
            <img class="card-img-top" src="database/images/<?php include 'database/db_connection.php';
                            $sql = "SELECT * FROM content";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            echo $row['protofilo_img'];
                            ?> " alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Protofilo</p>
                <form action="database/content.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image">
                    <input type="submit" name="protofilo" class="btn btn-primary" value="Save">
               </form>
                        </div>
        </div>
        <div class="card" style="margin-left: 2%; width: 18rem;">
            <img class="card-img-top" src="database/images/<?php include 'database/db_connection.php';
                            $sql = "SELECT * FROM content";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            echo $row['contact_img'];
                            ?> " alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Contact</p>
                <form action="database/content.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image">
                    <input type="submit" name="contact" class="btn btn-primary" value="Save">
               </form>            </div>
        </div>
        <div class="card" style="margin-left: 2%; width: 18rem;">
            <img class="card-img-top" src="database/images/<?php include 'database/db_connection.php';
                            $sql = "SELECT * FROM content";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            echo $row['user_img'];
                            ?> " alt="Card image cap">
            <div class="card-body">
                <p class="card-text">User</p>
                <form action="database/content.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image">
                    <input type="submit" name="user" class="btn btn-primary" value="Save">
               </form>            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 18%; margin-top: 30px;">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">About</h5>
                    <p class="card-text">
                        <form action="database/content.php" method="POST">
                            <textarea name="about_1" rows="4" class="form-control">
                                <?php include 'database/db_connection.php';
                                    $sql = "SELECT * FROM content";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    echo $row['about1'];
                                    ?>
                            </textarea>
                            <input type="submit" name="about_one" class="btn btn-primary" value="Save">
                        </form>        
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">About</h5>
                    <p class="card-text">
                        <form action="database/content.php" method="POST">
                            <textarea name="about_2" rows="4" class="form-control">
                                <?php include 'database/db_connection.php';
                                    $sql = "SELECT * FROM content";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    echo $row['about2'];
                                    ?>
                            </textarea>
                            <input type="submit" name="about_two" class="btn btn-primary" value="Save">
                        </form>        
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/foot.php'; ?>