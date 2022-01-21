<?php include 'includes/head.php'; ?>
<section>
    <div class="page-head">
        <h3>Admin</h3>
    </div>
    <div style="margin-left: 18%;" class="row">
        <div class="col-md-4">
            <form action="database/create_admin.php" method="POST">
                <h3>Create Admin</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputaddress">Address</label>
                        <input type="text" name="address" class="form-control" id="inputaddress" placeholder="Address">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4"
                            placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputcontact">Contact</label>
                    <input type="text" name="contact" class="form-control" id="inputAddress" placeholder="Contact">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <div class="col">
                <div class="table-responsive">
                    <h3>Display Admins</h3>
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">

                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="myTable" class="list">
                            <?php include 'database/db_connection.php';
                            $sql = "SELECT * FROM admins";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                $ids = $row["ID"];
                            ?>
                            <tr>
                                <td><?php echo $row['ID'] ?></td>
                                <td><?php echo $row['Names'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['Addresss'] ?></td>
                                <td><?php echo $row['Contact'] ?></td>
                                <td><?php echo $row['Passwords'] ?></td>
                                <td><a href="database/delete_admin.php?id=<?php echo $row['ID'] ?>"><button
                                            class="btn btn-secondary"><i class="fa fa-trash"></i></button></a>
                                    <button class="item" data-toggle="modal" type="button"
                                        data-target="#update_modal<?php echo $row['ID'] ?>">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="update_modal<?php echo $row['ID'] ?>" tabindex="-1"
                                role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="smallmodalLabel">Update Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                            <div class="card">
                                                <form action="database/update_admin.php" method="POST">
                                                    <input type="hidden" value="<?php echo $row['ID'] ?>" name="id">
                                                    <input type="text" name="name" value="<?php echo $row['Names'] ?>"
                                                        class="form-control" id="inputName" placeholder="Name">
                                                    <input type="text" name="address"
                                                        value="<?php echo $row['Addresss'] ?>" class="form-control"
                                                        id="inputaddress" placeholder="Address">
                                                    <input type="email" name="email" value="<?php echo $row['Email'] ?>"
                                                        class="form-control" id="inputEmail4" placeholder="Email">
                                                    <input type="password" name="password"
                                                        value="<?php echo $row['Passwords'] ?>" class="form-control"
                                                        id="inputPassword4" placeholder="Password">
                                                    <input type="text" name="contact"
                                                        value="<?php echo $row['Contact'] ?>" class="form-control"
                                                        id="inputcontact" placeholder="Contact">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/foot.php'; ?>