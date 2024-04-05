<?php
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>

        <div class="form">
        
        <div class="input_field">
            <label for="fname">First Name</label>
            <input type="text" class="input" name="fname" required>
        </div>

        <div class="input_field">
            <label for="lname">Last Name</label>
            <input type="text" class="input"  name="lname" required>
        </div>

        <div class="input_field">
            <label for="password">Password</label>
            <input type="password" class="input"  name="password" required>
        </div>

        <div class="input_field">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="input" name="con_password" required>
        </div>

        <div class="input_field">
            <label for="gender">Gender</label>
            <div class="custom_select">
            <select name="gender" required>
                <option value = "">Select</option>
                <option vlaue = "male">Male</option>
                <option value = "female">Female</option>
            </select>
            </div>
        </div>

        <div class="input_field">
            <label for="email">Email Address</label>
            <input type="text" class="input" name="email" required>
        </div>

        <div class="input_field">
            <label for="phone">Phone Number</label>
            <input type="text" class="input" name="phone" required>
        </div>

        <div class="input_field">
            <label for="address">Address</label>
            <textarea class="textarea" name="address" required></textarea>
        </div>

        <div class="input_field terms">
            <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
            </label>
            <p>Agree to Terms and Conditions</p>
        </div>

        <div class="input_field">
            <input type="submit" value="Register" class="btn" name="reg_btn">
        </div>
        </div>
        </form>
    </div>
</body>
</html>

<!-- PHP Area -->
<?php

if(isset($_POST['reg_btn'])) {
    $fname          = $_POST['fname'];
    $lname          = $_POST['lname'];
    $password       = $_POST['password'];
    $con_password   = $_POST['con_password'];
    $gender         = $_POST['gender'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $address        = $_POST['address'];

    // if($fname != "" && $lname != "" && $password != "" && $con_password != "" && $gender != "" && $email != "" && $phone != "" && $address != "") {

    $query = "INSERT INTO form VALUES ('$fname', '$lname', '$password', '$con_password', '$gender', '$email', '$phone', '$address')";
    $data = mysqli_query($conn, $query);

    if($data) {
        echo "<script> alert('Data Inserted into db');</script>";
    } else {
        echo "Failed to insert data: " . mysqli_error($conn);
    }
}

// else {
//     echo "<script>alert('Fill the form to register!');</script>";
// }
// }

?>
