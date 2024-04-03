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
        <div class="title">
            Registration Form
        </div>

        <div class="form">
        
        <div class="input_field">
            <label for="fname">First Name</label>
            <input type="text" class="input">
        </div>

        <div class="input_field">
            <label for="lname">Last Name</label>
            <input type="text" class="input">
        </div>

        <div class="input_field">
            <label for="password">Password</label>
            <input type="password" class="input">
        </div>

        <div class="input_field">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="input">
        </div>

        <div class="input_field">
            <label for="gender">Gender</label>
            <div class="selectbox">
            <select>
                <option value="gender">Select</option>
                <option value="gender">Male</option>
                <option value="gender">Female</option>
            </select>
            </div>
        </div>

        <div class="input_field">
            <label for="email">Email</label>
            <input type="text" class="input">
        </div>

        <div class="input_field">
            <label for="phone">Phone</label>
            <input type="text" class="input">
        </div>

        <div class="input_field">
            <label for="address">Address</label>
            <textarea></textarea>
        </div>

        <div class="input_field terms">
            <label for="check" class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
            </label>
            <p>Agree to Terms and Conditions</p>
        </div>

        <div class="input_field">
            <input type="submit" value="Register" class="btn">
        </div>

    </div>
</body>
</html>