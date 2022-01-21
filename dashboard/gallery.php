<?php include 'includes/head.php'; ?>
<section>
    <div class="page-head">
        <h3>Gallery</h3>
    </div>
    <div class="custom-file" style="margin-left: 23%; margin-top:10px; width:1000px">
    <form action="database/gallery.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" class="custom-file-input" id="customFile"><br>
        <label class="custom-file-label" for="customFile">Upload Image</label>
        <center><button type="submit" name="upload" class="btn btn-primary">Upload</button></center>
    </form>
    </div>
    <table class="table"  style="margin-left: 23%; width:1000px; margin-top:30px;">
        <thead class="thead-dark">
            <tr>
                <th class="success" scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'database/db_connection.php';
            $sql = "SELECT * FROM gallery ORDER BY ID DESC";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr class="bg-warning">
                    <td><?php echo $row['ID'] ?></td>
                    <td>
                        <img src="database/gallery/<?php echo $row['image'] ?>" class="rounded-circle" width="50" height="50">
                    </td>
                    <td><a href="database/gallery.php?id=<?php echo $row['ID'] ?>"><button class="btn btn-secondary"><i class="fa fa-trash"></i></button></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</section>
<?php include 'includes/foot.php'; ?>