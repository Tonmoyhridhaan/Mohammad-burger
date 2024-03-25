<?php
    $id = $_REQUEST['id'];
    //echo $id;
    include '../connection.php';
    $query = "SELECT * FROM items WHERE id = $sid";
    $sql = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($sql);
    $query = "DELETE FROM items WHERE id = $id";
    if(mysqli_query($con, $query)){ 
        $old_image = $row['image'];
        if(file_exists("../images/$old_image")){
            unlink("../images/$old_image");
        }
        echo "<script> alert('product deleted'); </script>";
        header('Location: itemList.php');
    }


?>