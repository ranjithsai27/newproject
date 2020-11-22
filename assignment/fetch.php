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

        $fetch_query =  mysqli_query($con,"select * from store");
        $query_rows = mysqli_num_rows($fetch_query);
        

        if($query_rows > 0){
            echo "<table class='table table-bordered'><tr><th>title</th><th>author</th><th>publisher</th><th></th><th>genre</th><th>price</th></tr>";
            while($row = mysqli_fetch_array($fetch_query)){ 
                echo "<tr><td>".$row['title']."</td>";
                echo "<td>".$row['author']."</td>";
                echo "<td>".$row['publisher']."</td>";
                echo "<td>".$row['genre']."</td>"; 
                echo "<td>".$row['price']."</td>";
                echo "<td> <a href='./delete.php?id=".$row['title']."'><button class='btn btn-danger'>Delete</button></a> <a href='./edit.php?id=".$row['title']."'> <button class='btn btn-success'>Update</button></a></td></tr>";
            }
            echo "</table>";
            
        }else{
            echo "No Data found";
        }
    ?>
</body>
</html>