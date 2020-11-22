<?php


if(isset($_POST['adding'])){
    inserData();
}

function inserData(){
    include_once('db_config.php');
    $title = $_POST['utitle'];
    $author = $_POST['uauthor'];
    $publisher = $_POST['upublisher'];
    $genre = $_POST['ugenre'];
    $price = $_POST['uprice'];
    
    $ins_query = mysqli_query($con, "INSERT INTO store (title,author,publisher,genre,price) VALUES ('$title','$author','$publisher','$genre','$price')");
    
    if($ins_query){
        echo"data inserted";
        
    }
}
?>