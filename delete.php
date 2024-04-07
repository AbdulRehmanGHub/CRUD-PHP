<?php
include ("connection.php");

$id= $_GET['id'];

$query = "DELETE FROM form WHERE id='$id'";

$data = mysqli_query($conn, $query);

if($data) {
    // echo "Record Deleted Successfully";
    echo "<script> alert('Data Deleted Successfully!');</script>";

    ?>

    <meta http-equiv= "refresh" content = "0; url = http://localhost/crud/display.php" />

    <?php
} else {
    // echo "Failed to Delete!";
    echo "<script> alert('Failed to Delete! ');</script>";
}

?>