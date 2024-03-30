<?php
    include 'connection.php';
    $sql = "SELECT * FROM items WHERE status = 1";
    $result = mysqli_query($con, $sql);
    echo "<br>HERE";
    while($row = mysqli_fetch_array($result)){
        echo $row['id'];
    }
?>
