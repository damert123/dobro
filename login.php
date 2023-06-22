<?php 
        session_start();
        include_once("connect.php");


        if(isset($_SESSION['user'])){
            header('Location: profile.php');
        }
       
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Войти</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>


    <div class="login-block container">
        <img src="img/Tspk-logo.png" class="login-logo" alt="">
        <h1>Добро=Счастье</h1>
        <div class="block-border-login">
            <form action="signin.php" method="post">
                <h2>Вход</h2>

                <?php
                    $errorLogin = isset($_SESSION['error_login']);
                    if ($errorLogin) {
                        echo '<p class="error_log">'. $_SESSION['error_login'] .'</p>';
                        unset($_SESSION['error_login']);
                    }
                    ?>
                        

                <div class="login-imp <?php if ($errorLogin) { echo 'error'; } ?>">
                    <p>Почта</p>
                    <div class="input-container">
                        <img src="img/email.svg" alt="">
                        <input  type="text" placeholder="Введите ваш email" name="email">
                    </div>
                </div>

                <div class="login-imp <?php if ($errorLogin) { echo 'error'; } ?>">
                    <p>Пароль</p>
                    <div class="input-container">
                        <img src="img/password.svg" alt="">
                        <input type="password" placeholder="Введите пароль" name="pass">
                    </div>
                </div>

               



                <div class="btn-lg">
                    <button type="submit" class="login-confirm">Войти</button>
                </div>

                <div class="not-reg">
                    <a href="reg.php">Я не зарегистрирован</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>