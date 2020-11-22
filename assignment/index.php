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
                   
                    <h2>Book Store</h2>
                    <input type="title" name="utitle" class="utitle form-control" placeholder="title">
                    <input type="author" name="uauthor" class="uauthor form-control" placeholder="author">
                    <input type="publisher" name="upublisher" class="upublisher form-control" placeholder="publisher" >
                    <input type="genre" name="ugenre" class="ugenre form-control" placeholder="genre" >
                    <input type="price" name="uprice" class="uprice form-control" placeholder="price" >

                    <input type="submit" value="adding" name="addnewbook" class="btn btn-primary login_btn" id="addnewbook">
                </form>
            </div>
        </div>
    </div>
</body>

</html>






