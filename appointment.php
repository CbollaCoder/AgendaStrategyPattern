<?php include("db.php") ?>

<?php include("includes/header.php") ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <form action="main.php" method="POST">
                    <div class="form-group">
                        <input type="text" id="nameApp" name="nameApp" class="form-control" placeholder="Appointment Name" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea  id="descriptionApp"name="descriptionApp" rows="2" class="form-control" placeholder="Appointment Description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="date" name="beginDate" class="form-control" placeholder="Begin Date" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="date" name="endDate" class="form-control" placeholder="End Date" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="appointmentPlace" rows="2" class="form-control" placeholder="Appointment Place"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" id="SaveAppointmentButton" name="SaveAppointmentButton" value="Save Appointment">
                </form>
                <center> <a href="index.php"> Main Menu </a> </center>
            </div>
            
            <div class="col-md-8">
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Decription </th>
                                <th> Begin Date </th>
                                <th> End Date </th>
                                <th> End Date </th>
                                <th> Created at </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM Appointment";
                                $result_task = mysqli_query($conn, $query);

                                while($row= mysqli_fetch_array($result_task)){ ?>
                                <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['description'] ?></td>
                                    <td><?php echo $row['beginDate'] ?></td>
                                    <td><?php echo $row['endDate'] ?></td>
                                    <td><?php echo $row['appointmentPlace'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td>
                                        <form action="main.php?id=<?php echo $row['id']?>" method="POST">
                                            <a href="appointmentEdit.php?id=<?php echo $row['id']?>" class="btn btn-warning btn-sm">Edit</a>
                                            <input type="submit" id="DeleteAppointmentButton" name="DeleteAppointmentButton" value="Delete" class="btn btn-danger btn-sm "> 
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