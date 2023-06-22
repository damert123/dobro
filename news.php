<?php 

session_start();
include_once("connect.php");

unset($_SESSION['error_message']);
?>



<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Tspk-logo.png" type="image/x-icon">
    <title>Новости</title>
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
    <div class="container news news_main">
        <div class="big-logo">
            <div class="text-logo-main">
            <h1 class='anim_items'><span class="color">Все</span> новости</h1> 
            <h2 class="anim_items color2">Последние новости о нас</h2>
        </div>
            <div class="news-added">
                <a href="news-added.php"><img src="img/ph_plus-fill.svg" style="width: 75%" alt=""></a>
            </div>
        </div>
        
        
        <div class="news_blocks">
        <article class="new_block">
                <h3>Всероссийский творческий конкурс «КОНТЕКСТ» </h3>

                <img src="img/logo_news.jpg" class="logo-news" alt="тут фотка новостей" onclick="location.href = 'new.html';"><br>

                <div class="news-feature">
                    <div>
                        <img src="img/datev2.png" alt=""><time>26.06.2023</time>
                    </div>
                    <div>
                        <img src="img/ion_people-sharp.svg" alt=""><time>Участвовали: 12</time>
                    </div>
                </div>
            </article>
            <article class="new_block">
                <h3>Акция «Лучи добра»</h3>

                <img src="img/logo_info.jpg" class="logo-news" alt="тут фотка новостей"><br>
                <div class="news-feature">
                    <div>
                        <img src="img/datev2.png" alt=""><time>26.06.2023</time>
                    </div>
                    <div>
                        <img src="img/ion_people-sharp.svg" alt=""><time>Участвовали: 12</time>
                    </div>
                </div>
            </article>
            <article class="new_block">
                <h3>«Добровольчество – как стиль жизни</h3>

                <img src="img/logo_info2.png" class="logo-news" alt="тут фотка новостей"><br>
                <div class="news-feature">
                    <div>
                        <img src="img/datev2.png" alt=""><time>26.06.2023</time>
                    </div>
                    <div>
                        <img src="img/ion_people-sharp.svg" alt=""><time>Участвовали: 12</time>
                    </div>
                </div>
            </article>
            <article class="new_block">
                <h3>Всероссийский творческий конкурс «КОНТЕКСТ» </h3>

                <img src="img/logo_news.jpg" class="logo-news" alt="тут фотка новостей" onclick="location.href = 'new.html';"><br>

                <div class="news-feature">
                    <div>
                        <img src="img/datev2.png" alt=""><time>26.06.2023</time>
                    </div>
                    <div>
                        <img src="img/ion_people-sharp.svg" alt=""><time>Участвовали: 12</time>
                    </div>
                </div>
            </article>
            
        </div>
        <ul class="list_news">
            <li class="li_news"><a href="" class="not">&#8592</a></li>
            <li class="li_news"><a href="">1</a></li>
            <li class="li_news"><a href="">2</a></li>
            <li class="li_news"><a href="">3</a></li>
            <li class="li_news"><a href="" class="not">&#8594</a></li>
        </ul>
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