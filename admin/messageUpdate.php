<?php

include '../connection.php';

$id = $_GET['id'];

$query = "UPDATE messages SET hasRead = 1 WHERE id = $id";

mysqli_query($con, $query);

header('Location: messages.php');


?>