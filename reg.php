<?php 
        session_start();
        include_once("connect.php");
       
        
        

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регестрация</title>
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
        <div class="call-back container">

            <div class="call-block" style="box-shadow: none; border: 3px solid #4e77f4; background-color: #4e77f405;">
                <form action="check.php" method="post">
                    <div class="call-input <?php if(isset($_SESSION['error_name'])){echo 'error';}?>" placeholder="Имя Фамилия">
                        <h2>Регистрация</h2>
                        <p>Имя </p>
                        <input type="text" name="name" placeholder="Введите Имя ">
                        <?php
                        if(isset($_SESSION['error_name'])){
                            echo '<p class="message"> '. $_SESSION['error_name'] .'</p>';
                            unset($_SESSION['error_name']);
                        }
                        ?>
                    </div>

                    <div class="call-input <?php if(isset($_SESSION['error_secname'])){echo 'error';}?>">
                        <p>Фамилия</p>
                        <input type="text" name="second_name"  placeholder="Введите Фамилия">
                        <?php
                        if(isset($_SESSION['error_secname'])){
                            echo '<p class="message"> '. $_SESSION['error_secname'] .'</p>';
                            unset($_SESSION['error_secname']);
                        }
                    ?>
                    </div>

                    <div class="call-input <?php if(isset($_SESSION['error_groupp'])){echo 'error';}?>">
                        <p>Группа</p>
                        <select name="groupp" id="">
                                            <option value="">Выберите группу</option>
											<option value="ИСиП-31">ИСиП-31</option>
											<option value="ИСиП-32">ИСиП-32</option>
											<option value="ИСиП-33">ИСиП-33</option>
											<option value="ИСиП-21">ИСиП-21</option>
											<option value="ИСиП-22">ИСиП-22</option>
											<option value="ИСиП-11">ИСиП-11</option>
											<option value="ИСиП-12">ИСиП-12</option>
									</select>
                                    <?php
                        if(isset($_SESSION['error_groupp'])){
                            echo '<p class="message"> '. $_SESSION['error_groupp'] .'</p>';
                            unset($_SESSION['error_groupp']);
                        }
                    ?>
                    </div>

                    <div class="call-input <?php if(isset($_SESSION['error_age'])){echo 'error';}?>">
                        <p>Дата рождения</p>
                        <input type="date" name="age" style="font-size: 18px;">
                        <?php
                        if(isset($_SESSION['error_age'])){
                            echo '<p class="message"> '. $_SESSION['error_age'] .'</p>';
                            unset($_SESSION['error_age']);
                        }
                    ?>
                    </div>

                    <div class="call-input <?php if(isset($_SESSION['error_phone'])){echo 'error';}?>">
                        <p>Телефон</p>
                        <input name="phone" type="text" id="phone" placeholder="Введите номер телефона" oninput="formatPhoneNumber()" maxlength="18">
                        <?php
                        if(isset($_SESSION['error_phone'])){
                            echo '<p class="message"> '. $_SESSION['error_phone'] .'</p>';
                            unset($_SESSION['error_phone']);
                        }
                    ?>
                    </div>
                    <div class="call-input <?php if(isset($_SESSION['error_pass'])){echo 'error';}?>">
                        <p>Пароль</p>
                        <input name="pass" type="password" placeholder="Пароль">
                        <?php
                        if(isset($_SESSION['error_pass'])){
                            echo '<p class="message"> '. $_SESSION['error_pass'] .'</p>';
                            unset($_SESSION['error_pass']);
                        }
                    ?>
                    </div>

                    <div class="call-input <?php if(isset($_SESSION['error_email'])){echo 'error';}?>">
                        <p>Email</p>
                        <input name="email" type="text" placeholder="example@mail.ru">
                        <?php
                        if(isset($_SESSION['error_email'])){
                            echo '<p class="message"> '. $_SESSION['error_email'] .'</p>';
                            unset($_SESSION['error_email']);
                        }
                    ?>
                    </div>



                    <div class="btn-call">
                        <button type="submit"><p>Зарегистрироваться</p></button>
                    </div>

                    <div class="not-reg">
                    <a href="login.php">Я меня уже есть аккаунт</a>
                </div>
                     

                    
                </form>
            </div>

        </div>
    </div>


    <script src="js/form.js"></script>
</body>

</html>