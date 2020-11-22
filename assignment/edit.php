<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<?php

include_once('db_config.php');
include_once('navbar.php');



$edit_title = $_GET['title'];
if($edit_title != NULL){
    $fetch_query = mysqli_query($con,"select * from store where id=$edit_title");
    $query_rows = mysqli_num_rows($fetch_query);
    if($query_rows>0){
       $row =  mysqli_fetch_array($fetch_query);
       echo '<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="myform" action="./edit_data.php?id='.$edit_title.'" method="POST">
                    <h2>Book Store</h2>
                    <input type="title" name="utitle" class="utitle form-control" placeholder="title" value ="'.$row['title'].'">
                    <input type="author" name="uauthor" class="uauthor form-control" placeholder="author" value ="'.$row['author'].'">
                    <input type="publisher" name="upublisher" class="upublisher form-control" placeholder="publisher" value ="'.$row['publisher'].'">
                    <input type="genre" name="ugenre" class="ugenre form-control" placeholder="genre" value ="'.$row['genre'].'">
                    <input type="price" name="uprice" class="uprice form-control" placeholder="price" value ="'.$row['price'].'">

                    <input type="submit" value="adding" name="addnewbook" class="btn btn-primary login_btn" id="addnewbook">
                </form>
            </div>
        </div>
    </div>';
    }else{
        echo "Invalid User selection";
    }
}else{
    echo "Invalid URL";
}


?>
    
</body>
</html>