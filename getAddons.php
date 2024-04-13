<?php
// Check if parameter is passed
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    include 'connection.php';
    $query = "SELECT * FROM addons WHERE item = $id ORDER BY category DESC";

    $result = mysqli_query($con, $query);
    $data = [];
    while($row = mysqli_fetch_array($result)){
        $data[] = $row;
    }
    echo json_encode($data);
} 
?>
