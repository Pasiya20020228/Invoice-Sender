<?php 

session_start();

require_once 'connection.php';

$id = rand();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO users(ID,Name,Email,Password) VALUES ('$id','$username','$email','$password')";

$result = mysqli_query($con,$sql);

if(!$result) {
    echo "Error Inserting Data...";
} else {
    header('Location:home.php');
    $_SESSION['status'] = "Added '$username'";
}


?>