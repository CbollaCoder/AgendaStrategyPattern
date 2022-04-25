<?php include("db.php") ?>

<?php include("includes/header.php") ?>
    <div class="container p-4">
        <div class="row">
            <h2>Appointment Edit Mode </h2>
            <div class="card card-body">
                <form action="main.php?id=<?php echo $_GET['id']; ?>" method="POST">
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
                    <input type="submit" class="btn btn-success btn-block" id="EditAppointmentButton" name="EditAppointmentButton" value="Save Appointment">
                </form>
            </div>
        </div>
    </div>
<?php include("includes/footer.php") ?>