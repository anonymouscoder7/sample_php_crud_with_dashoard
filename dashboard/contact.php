<?php include 'includes/head.php'; ?>
<section>
    <div class="page-head">
        <h3>Contact</h3>
    </div>
    <div style="margin-left: 16%;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th class="success" scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'database/db_connection.php';
                $sql = "SELECT * FROM contact ORDER BY ID DESC";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr class="bg-warning">
                        <td><?php echo $row['ID'] ?></td>
                        <td><?php echo $row['Names'] ?></td>
                        <td><?php echo $row['Contact'] ?></td>
                        <td><?php echo $row['Messages'] ?></td>
                        <td><a href="database/delete_contact.php?id=<?php echo $row['ID'] ?>"><button class="btn btn-secondary"><i class="fa fa-trash"></i></button></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<?php include 'includes/foot.php'; ?>