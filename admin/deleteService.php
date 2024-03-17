<?php
    $id = $_REQUEST['id'];
    //echo $id;
    include '../connection.php';

    $query = "DELETE FROM services WHERE id = $id";
    if(mysqli_query($con, $query)){
        echo "<script> alert('product deleted'); </script>";
        header('Location: serviceList.php');
    }


?>