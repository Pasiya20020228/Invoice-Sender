<?php

session_start(); 

require_once 'connection.php';

$userid = $_POST['userid'];

$sql = "DELETE FROM users WHERE ID='$userid'";

$result = mysqli_query($con,$sql);

if(!$result) {
    echo "Can't Delete Data";
} else {
    header("Location:home.php");
    $_SESSION['status'] = "Deleted '$userid'";
}


?>