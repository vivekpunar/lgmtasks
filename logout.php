<?php

session_start();

if(session_destroy()){

    header("Location: index.php");
    echo '<script language="javascript">';
    echo 'alert("Logout Successful")';
    echo '</script>';
}

?>