<?php


if(isset($_POST['submit'])){
    inserData();
}

function inserData(){
    include_once('db_config.php');
    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $Publisher = $_POST['Publisher'];
    $Genre = $_POST['Genre'];
    $Price = $_POST['Price'];
    
    $ins_query = mysqli_query($con, "INSERT INTO store (Title, Author, Publisher, Genre, Price) VALUES ('$Title','$Author','$Publisher','$Genre','$Price')");
    
   if($ins_query){
       header("location: fetch.php");
   }
}






?>
