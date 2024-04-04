<?php
// error_reporting(0);

$servername     = "localhost";
$username       = "root";
$password       = "";
$dbname         = "res_form";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn) {
    // echo "Connection Success!";
}
else {
    echo "Connection Failed!".mysqli_connect_error();
}
?>