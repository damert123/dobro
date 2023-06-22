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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

</head>

<body>
    <!-- Блок новость -->
    <!-- header -->
    <script src="js/jquery-3.6.4.min.js"></script>
    <?php include_once("header.php"); ?>
    <div class="container new">


        <div class="newRight">
            <h2>Заголовок Новости</h2>

            <div class="img-news">

                <ul id="image-gallery">
                    <li>
                        <a href="img/logo_info.jpg" data-lightbox="image-gallery" data-title="Image 1">
                            <img src="img/logo_info.jpg" alt="Image 1">
                        </a>
                    </li>
                    <li>
                        <a href="img/logo_info2.png" data-lightbox="image-gallery" data-title="Image 2">
                            <img src="img/logo_info2.png" alt="Image 2">
                        </a>
                    </li>
                    <!-- Добавь остальные изображения -->
                </ul>
            </div>

            <script>
                $(document).ready(function() {
                    $('#image-gallery a').lightbox({
                        fadeDuration: 500
                    });
                });
            </script>



            <p>
                Сегодня, 22 ноября, на базе Молодежь Тольятти ММЦ «Шанс» было проведено тематическое соревнование среди команд, принимающих участие в программе «Добролайф» от Ресурсный центр добровольчества Самарской обл. 💡Девочкам были представлены 5 блоков, в котором
                были задания, связанные с волонтерством: викторина, крокодил, построй башню, а в конце их ждал приятных сюрприз из 5 блока с любимыми песнями🎵 Состав команды «Цитрус»🍊: 🔸Сафонова Соня 🔸Забродина Настя 🔸Мишагина Полина 🔸Кузнецова
                Валя 🔸Глазкова Маша 🔸Солодовникова Алина 🔸Железова Алина 🔸Соргина Карина Наша команда заняла🥇место и отлично провела время в хорошей компании! Мы благодарим Ресурсный центр за предоставленную возможность быть частью такого интересного
                и увлекательного мероприятия❤ Зарядились и полетели закрывать год своих заданий🚀

            </p>
        </div>

        <div class="newLeft">
            <h2><span class="color">Свежие</span> новости
            </h2>
            <article class="new_block">
                <img src="img/logo_info.jpg" alt="тут фотка новостей"><br>
                <h3>Заголовокпа привет ппока ахахаа </h3>
                <time>24.02.2004</time>
            </article>
            <article class="new_block">
                <img src="img/logo_info3.jpg" alt="тут фотка новостей"><br>
                <h3>Заголовок</h3>
                <time>24.02.2004</time>
            </article>
            <article class="new_block">
                <img src="img/logo_info2.png" alt="тут фотка новостей"><br>
                <h3>Заголовок</h3>
                <time>24.02.2004</time>
            </article>

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