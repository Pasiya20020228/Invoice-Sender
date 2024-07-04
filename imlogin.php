<?php 

session_start();

require_once 'connection.php';

$_SESSION['username'] = "";

$user = $_POST['username'];
$pass = $_POST['password'];

$msg = "msg data";

//create session variables
$_SESSION['username'] = $user;


if ($user == "Nipun" && $pass == "1234") {
    header("Location: home.php");
    $_SESSION['status'] = "Login Sucsessfully!!";
} else if ($user == "" && $pass == "") {
    $msg = "Login data Empty, Please Try Again..!!";
} else {
    $msg = "Login Details Mismatch, Please Try Again!!!";
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Manager - Error</title>

    <!--Link CSS-->
        <link rel="stylesheet" type="text/css" href="main.css">
    <!--Link CSS-->

            <!--Fonts Link-->

        <!--Google Font server Link-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!--Roboto Slab-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

        <!--Oswald-->
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

        <!--Fonts Link-->

    <style>
        body {
            text-align: center;
        }

        .btn {
            border: none;
            padding-left: 3%;
            padding-right: 3%;
            padding-top: 1%;
            padding-bottom: 1%;
            background-color: blue;
            border-radius: 10px;
            color: white;
            font-family: 'Oswald', sans-serif;
        }

        .btn:hover {
            color: orange;
            transition: .4s;
            cursor: pointer;
        }

        .title {
            text-align: center; 
            margin-top: 2%;
            font-size: 170%;
            font-family: 'Roboto Slab', serif;
        }
    </style>

</head>
<body>
    
</body>
</html>

<div class="title">
    <p><?php echo $msg ?></p>
</div>
<br><br>
<a href="index.html"><button class="btn">Back to Login</button></a>