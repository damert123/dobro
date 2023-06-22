<?php 
session_start();
include_once("connect.php");
unset($_SESSION['error_message']);
unset($_SESSION['error_name']);  // Удаление переменной
unset($_SESSION['error_secname']);
unset($_SESSION['error_groupp']);
unset($_SESSION['error_age']);
unset($_SESSION['error_phone']);
unset($_SESSION['error_pass']);
unset($_SESSION['error_email']);


if(!$_SESSION['user']){
    header('Location: index.php');
}

$originalDate = $_SESSION['user']['age']; // Предположим, что это значение получено из базы данных в формате "гггг-мм-дд"
$convertedDate = date("d.m.Y", strtotime($originalDate)); // Преобразуем формат даты в "дд.мм.гггг"

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/Tspk-logo.png" type="image/x-icon">
    <title>Профиль</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->

    <?php include_once("header.php"); ?>

    
        <div class="profile-block container">
            <div class="profile-main">
                <div class="profile-logo-ava">
                    <div class="profile-avatar">
                        <img src="img/profile_logo.png" alt="">
                    </div>

                    <a href="profile-edit.php"><img src="img/uil_pen.png" alt="">Редактировать</a>
                    <a href="logout.php" style="margin-top: 20px; background-color: #D9D9D9; color: #000;"><img src="img/logout.svg" alt="">Выход</a>
                </div>

                <div class="profile-block-info">
                    <div class="profile-block-about">
                        <div class="profile-info-first">
                            <div class="prfl-name">
                                <p>Имя</p>
                                <input type="text" readonly value="<?php echo $_SESSION['user']['name']; ?>">
                            </div>
                            <div class="prfl-name">
                                <p>Телефон</p>
                                <input type="text" readonly value="<?php echo $_SESSION['user']['phone']; ?>">
                            </div>
                            <div class="prfl-name">
                                <p>Email</p>
                                <input type="text" readonly value="<?php echo $_SESSION['user']['email']; ?>">
                            </div>

                        </div>

                        <div class="profile-info-first">
                            <div class="prfl-name">
                                <p>Фамилия</p>
                                <input type="text" readonly value="<?php echo $_SESSION['user']['second_name']; ?>">
                            </div>
                            <div class="prfl-name">
                                <p>Дата рождения</p>
                                <input style="font-size: 18px;" type="text" readonly value="<?php echo $convertedDate; ?>">
                            </div>
                            <div class="prfl-name">
                                <p>Группа</p>
                                <input type="text" readonly value="<?php echo $_SESSION['user']['groupp']; ?>">
                            </div>


                        </div>
                    </div>
                    <div class="profile-about">
                        <p>О себе</p>
                        <textarea name="" id="" cols="30" rows="10" readonly ></textarea>
                    </div>

                </div>


            </div>
            


        </div>

    



    <footer class="footer ">
        <div class="footer-block container">

            <div class="footer-item">
                <div class="tel">
                    <img src="img/phone.png" alt="" srcset="">
                    <a href="">+7 (927)-788-38-44</a>
                </div>
                <div class="tel">
                    <img src="img/email.png" alt="" srcset="">
                    <a href="">oplachko.nn@yandex.ru</a>
                </div>

            </div>


            <div class="footer-logo">

                <img src="img/Tspk-logo.png" alt="">
                <h2>Добро=Счастье</h2>
                <p>2023 © Волонтерский центр ГАПОУ ТСПК.</p>
                <!-- <p>2000-2023г.</p> -->
            </div>


            <div class="footer-item">
                <div class="tel">
                    <img src="img/location.png" alt="" srcset="">
                    <a href="">ул. Мурысева, 84, Тольятти</a>
                </div>

                <div class="tel">
                    <img src="img/vk.png" alt="" srcset="">
                    <a href="">Группа ВК</a>
                </div>
            </div>
        </div>

    </footer>


    <script src="js/main.js"></script>
    <script src="js/hmain.js"></script>
    <script src="js/scrollMain.js"></script>





</body>

</html>