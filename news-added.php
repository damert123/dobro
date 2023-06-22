<?php 

session_start();
include_once("connect.php");
// unset($_SESSION['error_message']);

?>






<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Tspk-logo.png" type="image/x-icon">
    <title>Добваить новость</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Блок новости -->
    <!-- header -->

    <?php include_once("header.php"); ?>

    <div class="news-added-block  container ">
    <form action="news-check-added.php" method="post" enctype="multipart/form-data">
        <h1 class='anim_items' style="margin-bottom: 10px;">Добавить новость</h1>

        <div class="news-backgr">


            <div class="news-flex">
                <div class="news-added-img">
                    <p>Загрузить картинку</p>
                    <img src="img/logo_info.jpg" alt="">
                    <label class="custom-file-upload">
                    <input type="file" name="image_news" id="file-input">Добавить
                    </label>
                    <p id="file-name" style="margin-top: 10px;"></p>
                </div>
                <?php
                        if(isset($_SESSION['error_message'])){
                            echo '<p class="message"> '. $_SESSION['error_message'] .'</p>';
                            unset($_SESSION['error_message']);
                        }
                        ?>

                <?php
                        if(isset($_SESSION['message'])){
                            echo '<p class="message_good"> '. $_SESSION['message'] .'</p>';
                            unset($_SESSION['message']);
                        }
                        ?>
            </div>
            

            <div class="news-block-about">

                <div class="news-added-logo">
                    <p>Заголовок новости</p>
                    <input name="logo_news" type="text">
                </div>

                <div class="news-added-description">
                    <p>Описание новости</p>
                    <textarea name="text_news" type="text"></textarea>
                </div>
                <div class="news-added-info">
                    <p>Участвовало волонтеров</p>
                    <input name="count_vol" type="number">
                </div>
                <div class="btn-send-news">
                    <button type="submit">Опубликовать новость</button>
                </div>
            </div>



        </div>
        </form>
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

    <script src="js/img-added.js"></script>
    <script src="js/main.js"></script>
    <script src="js/hmain.js"></script>
    <script src="js/scrollMain.js"></script>

</body>

</html>