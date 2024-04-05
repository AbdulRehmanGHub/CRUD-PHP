<html>
    <head>
        <title>Display</title>
        <style>
            body {
                background: rgb(144, 250, 58);
            }

            h1{
                margin: 20px 38%;
                text-align: center;
                border-radius: 15px;
                background: #004f63;
                color: #fff;
                font-family: arial;
            }

            table {
                background: #fff;
                border-radius: 10px;
                margin: 10px auto;
                width: 80%;
            }
        </style>
    </head>


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

    <h1>Data Dispaly Page</h1>

    <table border= 2 cellspacing = 6>
        <tr>
            <th width="8%">First Name</th>
            <th width="8%">Last Name</th>
            <th width="7%">Gender</th>
            <th width="10%">Email</th>
            <th width="8%">Phone</th>
            <th width="15%">Address</th>
            <th width="10%">Actions</th>
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
</html>