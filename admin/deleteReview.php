<?php
    $id = $_REQUEST['id'];
    //echo $id;
    include '../connection.php';

    $query = "DELETE FROM reviews WHERE id = $id";
    if(mysqli_query($con, $query)){
        echo "<script> alert('review deleted'); </script>";
        header('Location: reviews.php');
    }


?>