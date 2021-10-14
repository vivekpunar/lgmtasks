<?php
session_start();
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Adding Logo to the title -->
    <link rel="shorcut icon" type="image/png" href="Media/logo_nb.png">

    <title>Student List</title>
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <?php
        include 'sidebar.php'
        ?>
        <div class="main_content">
            <div class="header"> <div class="header">
            <div class="user">
        <i class="fas fa-user"></i>
        <p class="username"> Welcome User:<?= $name_user ?></p>
        <p class="des">Designation:<?= $desig ?></p>

    </div>

            <div class="logout">
        <a href="logout.php" style="color: black; float:right; margin-top:-20px;"><i class="fas fa-sign-out-all"></i><h3>Logout</h3></a>

    </div>    </div>
            <div class="info">
                <div class="add-class res mtable">
                    <h1>Students List</h1>
                    <div class="view-table">
                        <?php
                        include('connection.php');
                        include('session.php');

                        $sql = "SELECT `name`, `roll`, `class` FROM `students`";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            echo "<table>
                <tr>
                <th>NAME</th>
                <th>ROLL NO</th>
                <th>CLASS</th>
                </tr>";

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['roll'] . "</td>";
                                echo "<td>" . $row['class'] . "</td>";
                                echo "</tr>";
                            }

                            echo "</table>";
                        } else {
                            echo "0 Students";
                        }
                        ?>
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>
