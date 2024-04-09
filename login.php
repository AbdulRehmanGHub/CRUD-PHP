<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
        body {
            background-color: rgb(144, 250, 58);
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .center {
            background: #004f63;
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            border-radius: 6px;
        }

        .center h1{
            text-align: center;
            padding-bottom: 16px;
            border-bottom: 1px solid grey;
        }

        .form {
            padding-bottom: 15px;
            margin: 0 20px;
            text-align: center;
        }

        .text_field {
            width: 100%;
            height: 45px;
            font-size: 18px;
            border: 2px solid rgb(144, 250, 58);
            box-sizing: border-box;
            border-radius: 6px;
            padding-left: 10px;
            margin: 7px 0;
            outline: none;
        }

        .login_btn {
            width: 100%;
            height: 45px;
            background: rgb(144, 250, 58);
            border: 1px solid green;
            border-radius: 6px;
            font-size: 20px;
            margin: 7px 0;
            cursor: pointer;
            outline: none;
        }

        .login_btn:hover {
            background: rgb(99, 212, 5);
        }

        .forget_pass {
            padding: 4px;
            margin-top: 3px;
            margin-bottom: 3px;
            font-size: 18px;
        }

        .forget_pass a {
            color: rgb(144, 250, 58);
            font-size: 18px;
            text-decoration: none;
        }


        .sign_up {
            padding: 4px;
            margin-top: 3px;
            margin-bottom: 3px;
            font-size: 18px;

        }

        .sign_up a {
            color: rgb(144, 250, 58);
            font-size: 18px;
            text-decoration: none;
        }

        @media (max-width: 420px) {
            .center {
            width: 90%;
        }
    }

    </style>
    
</head>
<body>

    <div class="center">
        <h1>Login</h1>

        <form action="#" method="POST" autocomplete="off">
        <div class="form">
                <input type="email" name="email" class= "text_field" placeholder="Email">
                <input type="password" name="password" class= "text_field" placeholder="Password">

            <div class="forget_pass"><a href="#" onclick="pop()"> Forget Password ?</a></div>

            <input type="submit" value="Login" class="login_btn" name="login_btn">

            <div class="sign_up"> New Here ? <a href="form.php"> SignUp Now</a></div>
        </div>
        </form>
    </div>

    <script>

        function pop() {
            alert("It's working, need to add forget pass functionality!");
        }

    </script>

</body>
</html>


<?php

include ("connection.php");

if(isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM form WHERE email = '$email' && password = '$password'";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    // echo $total;

    if($total == 1) {
        $_SESSION['email'] = $email;
        header('location:display.php');

    } else {
        echo "failed to login";
    }

}

?>