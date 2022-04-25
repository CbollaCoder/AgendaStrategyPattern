<?php include("db.php") ?>

<?php include("includes/header.php") ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="main.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Note Title" autofocus>
                        </div>
                        <div class="form-group">
                            <textarea name="description" rows="2" class="form-control" placeholder="Note Description"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" id="SaveNoteButton" name="SaveNoteButton" value="Save Note">
                    </form>
                </div>
                <center> <a href="index.php"> Main Menu </a> </center>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> Nombre </th>
                                <th> Decripción </th>
                                <th> Creación </th>
                                <th> Acciones </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM note";
                                $result_task = mysqli_query($conn, $query);

                                while($row= mysqli_fetch_array($result_task)){ ?>
                                <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['description'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td>
                                        <form action="main.php?id=<?php echo $row['id']?>" method="POST">
                                            <!-- <input type="submit" id="EditNoteButton" name="EditNoteButton" value="Edit" class="btn btn-warning"> -->
                                            <a href="noteEdit.php?id=<?php echo $row['id']?>" class="btn btn-warning btn-sm">Edit</a>
                                            <input type="submit" id="DeleteNoteButton" name="DeleteNoteButton" value="Delete" class="btn btn-danger btn-sm "> 
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