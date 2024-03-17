<?php
    $id = $_REQUEST['id'];
    $data = $_REQUEST['data'];
    
    include '../connection.php';
    $query = "UPDATE orders SET status = $data WHERE id = $id";
    $sql = mysqli_query($con, $query);
    if($sql){
        if($data=="3"){
            echo "<script> alert('Booking Confirmed') </script>";
        }
        else if($data=="2"){
            echo "<script> alert('Booking Cancelled') </script>";
        }
        else if($data=="1"){
            echo "<script> alert('Booking Completed!') </script>";
        }
        
        echo "<script> window.location.href = 'bookings.php' </script>";
    }
?>