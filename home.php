<?php

session_start();

require_once 'connection.php';

$username = $_SESSION['username'];


if (!$username == "Nipun") {
    header("Location:index.html");
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Manager - Home</title>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!--Link CSS-->
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="style.css">
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

</head>

<body id="body">
    <div class="con">

        <div class="nav">
            <div class="left">
                <a href="signup.html">Add</a>
                <a href="update.html">Update</a>
                <a href="delete.html">Delete</a>
                <a href="logout.php">Log out</a>
            </div>

            <div class="right">
                <img src="img/profile_pic.png" alt="profile_pic">
                <p><?php echo $username; ?></p>
            </div>
        </div>







        <!--<p><?php echo $error_msg; ?></p>
        <p>You logged as <?php echo $username; ?></p>
        <br><br>
        <a href="signup.html">Add a User</a>
        <br>
        <a href="update.html">Update a User</a>
        <br>
        <a href="delete.html">Delete a User</a>
        <br>-->

        <br><br>
        <p>User List</p>
        <?php
        $query = "SELECT * FROM users";
        $result = mysqli_query($con, $query);

        //json array for search results
        $json_array = array();

        echo "<table border='1'>
              <tr style={padding:'20px';}>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
              </tr>
              <tr>";

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                //$list[$i] = "ID: " . $row['ID'] . " Name: " . $row['Name'] . " Email: " . $row['Email'];
                echo "<tr><td>" . $row['ID'] . "</td>" . "<td>" . $row['Name'] . "</td>" . "<td>" . $row['Email'] . "</td></tr>";
                $json_array[] = $row;
            }
        } else {
            echo "No Results...";
        }

        echo "</table>";




        ?>

        <div class="status">
            <div class="frame">
                <p>Last Activity - <?php echo $_SESSION['status']; ?></p>
            </div>
        </div>

    </div>

    <script type="text/javascript" src="script.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script>
        $(function() {
            var Tags = [<?php $result; ?>];
            $("#s_name").autocomplete({
                source: Tags
            });
        });
    </script>
</body>


</html>