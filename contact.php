<?php include("db.php") ?>

<?php include("includes/header.php") ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="main.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Telephone" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" id="SaveContactButton" name="SaveContactButton" value="Save Contact">
                    </form>
                </div>
                <center> <a href="index.php"> Main Menu </a> </center>
            </div>
            <div class="col-md-8">
            <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Phone </th>
                                <th> Email </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM ContactTable";
                                $result_task = mysqli_query($conn, $query);

                                while($row= mysqli_fetch_array($result_task)){ ?>
                                <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td>
                                        <form action="main.php?id=<?php echo $row['id']?>" method="POST">
                                            <!-- <input type="submit" id="EditNoteButton" name="EditNoteButton" value="Edit" class="btn btn-warning"> -->
                                            <a href="ContactEdit.php?id=<?php echo $row['id']?>" class="btn btn-warning btn-sm">Edit</a>
                                            <input type="submit" id="DeleteContactButton" name="DeleteContactButton" value="Delete" class="btn btn-danger btn-sm "> 
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include("includes/footer.php") ?>