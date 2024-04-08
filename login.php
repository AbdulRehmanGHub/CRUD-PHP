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
            height: 30px;
            font-size: 16px;
            border: 1px solid rgb(144, 250, 58);
            box-sizing: border-box;
            border-radius: 6px;
            padding-left: 10px;
            margin: 7px 0;
        }

        .login_btn {
            width: 100%;
            height: 30px;
            background: rgb(144, 250, 58);
            border-radius: 6px;
            margin: 7px 0;
            cursor: pointer;
        }

        .login_btn:hover {
            background: rgb(50, 100, 0);
        }
        



    </style>
    
</head>
<body>

    <div class="center">
        <h1>Login</h1>

        <div class="form">
                <input type="email" name="email" class= "text_field" placeholder="type email here">
                <input type="password" name="password" class= "text_field" placeholder="type password here">

            <div class="forget_pass"><a href="#"> Forget Password ?</a></div>

            <input type="submit" value="Login" class="login_btn" name="login_btn">

            <div class="sign_up"> New Here? <a href="form.php"> SignUp Now</a></div>
        </div>
    </div>

</body>
</html>