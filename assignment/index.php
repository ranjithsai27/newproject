<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<?php include_once('./navbar.php'); ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="myform" action="./server.php" method="POST">
                    <h2>Adding book</h2>
                    <input type="text" name="Title" class="Title form-control" placeholder="Title">
                    <input type="text" name="Author" class="Author form-control" placeholder="Author">
                    <input type="text" name="Publisher" class="Publisher form-control" placeholder="Publisher">
                    <input type="text" name="Genre" class="Genre form-control" placeholder="Genre">
                    <input type="text" name="Price" class="Price form-control" placeholder="Price">
                    <input type="submit" value="add" name="submit" class="btn btn-primary login_btn" id="myloginbtn">
                </form>
            </div>
        </div>
    </div>
</body>

</html>