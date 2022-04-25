<?php include("db.php") ?>

<?php include("includes/header.php") ?>
    <div class="container p-4">
        <div class="row">
            <h2>Contact Edit Mode </h2>
            <div class="card card-body">
                <form action="main.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Note Title" autofocus>
                    </div>
                    <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Telephone" autofocus>
                    </div>
                    <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" id="EditContactButton" name="EditContactButton" value="Save Contact">
                </form>
            </div>
        </div>
    </div>
<?php include("includes/footer.php") ?>