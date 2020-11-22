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

    $ins_query = mysqli_query($con, "UPDATE store
    SET title = '$title', author= '$author', publisher= '$publisher', genre= '$genre', price= '$price' WHERE id=$edit_title");
    
    if($ins_query){
        header("location: fetch.php");
    }
}
?>