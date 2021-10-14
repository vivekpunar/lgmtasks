<?php

session_start();
$name_user = $_SESSION['name'];
$desig = $_SESSION['designation'];

?>

<div class="sidebar">
    <h2>Dashboard</h2>
    <ul>
        <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
        <li class="dropdown"><a href="">Student</a>
            <ul>
                <li><a href="student_add.php"></i>Add</a></li>
                <li><a href="student_view.php"></i>View</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=""></i>Result</a>
            <ul>
                <li><a href="result_add.php">Add</a></li>
                <li><a href="result_update.php">Update</a></li>
                <li><a href="result_view.php">View</a></li>
            </ul>
        </li>

       
        <li id="adduser"><a href="user_add.php">Add User</a></li>
    </ul>
   

    
</div>