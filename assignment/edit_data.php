<?php


if(isset($_POST['submit'])){
    inserData();
}


function inserData(){
    $edit_id = $_GET['id'];
    include_once('db_config.php');
    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $Publisher = $_POST['Publisher'];
    $Genre = $_POST['Genre'];
    $Price = $_POST['Price'];
    
    $ins_query = mysqli_query($con, "UPDATE store
    SET Title = '$Title',Author = '$Author', Publisher= '$Publisher',Genre = '$Genre', Price= '$Price'
    WHERE id = $edit_id");
    
    if($ins_query){
        header("location: fetch.php");
    }
}






?>