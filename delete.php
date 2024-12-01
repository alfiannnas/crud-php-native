<?php
    include 'database.php';

    $id = $_GET["id"];
    $query = "DELETE FROM allergens WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if($result){
        header("location: index.php");
    }
?>