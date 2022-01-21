<?php include 'includes/head.php'; ?>

<section>
    <div class="page-head">
        <h3>Dashboard</h3>
    </div>
    <div class="row" style="margin-top: 2%; margin-left: 20%">
        <div class="card-group">
            <div class="card bg-primary" style="margin: 5px; min-width: 250px;">
                <div class="card-body text-center">
                    <div class="card-header">Admin</div>
                    <p class="card-text">
                        <?php include 'database/db_connection.php';
                        $sql = "SELECT * FROM admins";
                        $result = $conn->query($sql);
                        $row = mysqli_num_rows($result);
                        echo $row;
                        ?>
                    </p>
                </div>
            </div>
            <div class="card bg-warning" style="margin: 5px; min-width: 250px;">
                <div class="card-body text-center">
                    <div class="card-header">Gallery</div>
                    <p class="card-text">
                        <?php include 'database/db_connection.php';
                        $sql = "SELECT * FROM gallery";
                        $result = $conn->query($sql);
                        $row = mysqli_num_rows($result);
                        echo $row;
                        ?>
                    </p>
                </div>
            </div>
            <div class="card bg-success" style="margin: 5px; min-width: 250px;">
                <div class="card-body text-center">
                    <div class="card-header">Contact</div>
                    <p class="card-text">
                        <?php include 'database/db_connection.php';
                        $sql = "SELECT * FROM contact";
                        $result = $conn->query($sql);
                        $row = mysqli_num_rows($result);
                        echo $row;
                        ?>
                    </p>
                </div>
            </div>
            <div class="card bg-danger" style="margin: 5px; min-width: 250px;">
                <div class="card-body text-center">
                    <div class="card-header">Content</div>
                    <p class="card-text">
                        6
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/foot.php'; ?>