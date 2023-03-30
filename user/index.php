<?php
$result = "";
if (isset($_GET['msg'])) {
    $result = $_GET['msg'];
}
?>
<!DOCTYPE html>
<html>

<head>

    <link rel="icon" type="image/png" href="../image/6.png">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">

    <title>Employee Login - HRM</title>
    <style>
        html {
            min-height: 100%;
            width: 100%;
        }

        body {
            background: url("../image/2053215.jpg") no-repeat;
            min-height: 100vh;
            font-family: Montserrat;
            margin: unset;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* /* background-color: #0093E9;
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%); */
        }

        .logo {
            width: 213px;
            height: 36px;
            background: url('../image/6.png') no-repeat;
            margin: 30px auto;
        }

        .login-block {
            width: 320px;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            border-top: 5px solid #324341;
            margin: 0 auto;
        }

        .login-block h1 {
            text-align: center;
            color: #000;
            font-size: 18px;
            text-transform: uppercase;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .login-block input {
            width: 100%;
            height: 42px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 14px;
            font-family: Montserrat;
            padding: 0 20px 0 50px;
            outline: none;
        }

        .login-block input#username {
            background: #fff url('image/img_282253.png') 20px left no-repeat;
            background-size: 16px 80px;
        }

        .login-block input#password {
            background: #fff url('image/th.jpg') 20px top no-repeat;
            background-size: 16px 80px;
        }

        .login-block input:active,
        .login-block input:focus {
            border: 1px solid #4e6865;
        }

        .login-block button {
            width: 100%;
            height: 40px;
            background: #ff656c;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #e15960;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            font-family: Montserrat;
            outline: none;
            cursor: pointer;
        }

        .login-block button:hover {
            background: #324341;
        }

        .login-block button {
            border: unset;
            background-color: #010101;
            background-image: linear-gradient(160deg, #010101 0%, #4e6865 100%);
        }

        .text-white {
            color: #fff;
        }

        .admin-login {
            color: #dfeff9;
            font-weight: 500;
            display: flex;
            justify-content: center;
        }

        .admin-login label:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <h1 class="text-white">Human Resource Management System - Employee Side</h1>
    <br>
    <br>
    <div class="login-block">
        <h1>Login</h1>
        <form class="form" method="POST" Action="../controller/login.php">
            <input type="text" name="name" value="" placeholder="Email ID" id="username" />
            <input type="password" name="password" value="" placeholder="Password" id="password" />
            <h4 style="color: #FF0000; font-weight: normal;"><?php echo $result; ?></h3>
                <button type="submit" name="clientlogin">Submit</button>
    </br></br>
                <div class="admin-login">
                    <label><a href="../index.php" class="text-black">Login as an Admin</a></label>
                </div>
        </form>
    </div>
</body>

</html>