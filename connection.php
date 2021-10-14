<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "rms";

$conn=mysqli_connect($server,$username,$password,$database);
if($conn){

}

else
die("connection to this database failed due to " .mysqli_connect_error());

?>