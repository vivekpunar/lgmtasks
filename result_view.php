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

    <title>Result</title>
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

                <div class="add-class">
                    <h1>View Result</h1>
                    <form action="result_view_page.php" method="GET">
                        <?php
                        include('connection.php');

                        $class_result = mysqli_query($conn, "SELECT `name` FROM `stream`");
                        echo '<select name="class">';
                        echo '<option selected disabled>Select Stream</option>';
                        while ($row = mysqli_fetch_array($class_result)) {
                            $display = $row['name'];
                            echo '<option value="' . $display . '">' . $display . '</option>';
                        }
                        echo '</select>'
                        ?>
                        <input class="text-input" type="text" name="roll" placeholder="Enter Roll Number" value="<?php if (isset($_GET['roll'])) {
                                                                                                                        echo $_GET['roll'];
                                                                                                                    } ?>">
                        <br><input class="button" type="submit" value="Fetch Result">

                    </form>

                </div>

            </div>
        </div>
    </div>

</body>

</html>
