<?php
include ("connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$show_data = mysqli_num_rows($data);

// bring data in array format and store in one variable
// $result = mysqli_fetch_assoc($data);

// echo $result['lname'];
// echo $result['address'];

// echo $result['fname'] . " " . $result['lname'] . " " . $result['gender'] . " " . $result['email'] . " " . $result['phone'] . " " . $result['address'];


// echo $show_data;

if($show_data != 0) {
    // echo " <br> Table has records";
    // $a = 1;
    ?>

    <table border="2">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    
    <?php
    while($result = mysqli_fetch_assoc($data)) {
        // echo $result['fname'] . " " . $result['lname'] . " " . $result['gender'] . " " . $result['email'] . " " . $result['phone'] . " " . $result['address'] . "<br>";
        // echo "<br> $a Hello I'm using while loop here!";
        // $a++;

        echo "<tr>
                <td>".$result['fname']."</td>
                <td>".$result['lname']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['address']."</td>
            </tr>";

    }
} else {
    echo "No record found!";
}

?>

</table>