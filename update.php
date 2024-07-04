<?php

session_start();

require_once 'connection.php';


$userid = $_POST['userid'];
$newuserid = $_POST['newuserid'];
$newusername = $_POST['newusername'];
$newuseremail = $_POST['newuseremail'];


$sql = "UPDATE users SET ID = '$newuserid',Name = '$newusername',Email = '$newuseremail' WHERE ID = '$userid' LIMIT 1";

$result = mysqli_query($con,$sql);

if(!$result) {
    echo "Failed to Update!!";
} else {
    header("Location:home.php");
    $_SESSION['status'] = "Updated '$userid'";
}





?>