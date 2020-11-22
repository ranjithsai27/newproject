<?php

include_once('db_config.php');

$user_title = $_GET['title'];
if($user_title != NULL){
    $delet_query = mysqli_query($con,"DELETE FROM store WHERE id=$user_title ");
    if($delet_query){
        header("location: fetch.php");
    }
    else{
        echo "Error In deleting User record";
    }
}else{
    echo "Invalid URL / Invalid user Id";
}


?>
