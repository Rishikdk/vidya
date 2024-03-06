<?php
include("../connect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        extract($_POST);

        $sql = "SELECT * FROM users WHERE email='{$email}'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {

                session_start();
                $_SESSION['email'] = $email;
                header("Location:/users/dashboard.php");
            } else {
                echo "wrong password";
            }

        } else {
            echo "user not found";
        }




    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/user/login.css">
</head>

<body>
    <div class="main">
        <div class="left">
            <img src="/img/icone.png" class="logo" alt="">
        </div>
        <div class="right">
            <form action="#" method="POST" class="form" onsubmit="return validate()">
                <div class="username prefix">
                    <label>Username :</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="Password prefix">
                    <label>Password :</label>
                    <input type="text" id="password" name="password">
                </div>
                <button type="submit">Log In</button>
                <div class="container">
                    <div class="signIn">
                        <a href="register.php">Create a New Account</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>