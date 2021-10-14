<?php

session_start();
include('session.php');

?>

<!-- <?php

include("connection.php");

$no_of_classes = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `stream`"));
$no_of_students = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `students`"));
$no_of_result = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `result`"));


?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shorcut icon" type="image/png" href="Media/logo_nb.png">

    <title>DASHBOARD</title>
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <div class="wrapper">
        <?php
        include 'sidebar.php'
        ?>

        <div class="main_content">
            <div class="header">
            <div class="user">
        <i class="fas fa-user"></i>
        <p class="username"> Welcome User:<?= $name_user ?></p>
        <p class="des">Designation:<?= $desig ?></p>

    </div>

            <div class="logout">
        <a href="logout.php" style="color: black; float:right; margin-top:-20px;"><i class="fas fa-sign-out-all"></i><h3>Logout</h3></a>

    </div>    
            </div>
            
            <div class="info">
                <div class="welcome">
                    <h1>Welcome To </h1>
                    <h1>Gyan Public School</h1>
                    <h3 style="margin-top:15px; text-align:center;">This section is only for teachers and staff members </h3>
                    <img style="margin-left:17.5rem; margin-top:5rem" src="css/school.jpg" alt="school image">
                </div>
               
            </div>
            </div>
        </div>    
                

</body>
</html>