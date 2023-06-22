<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
    <title>ВОИ О нас</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->

    <header class="header">
        <div class="container aaa">
            <div class="headerOne">
                <div class="logo">
                    <img class='logoimg' src="img/logo.svg" alt="logo">
                    <div class="logoText">
                        <h2>Общество инвалидов</h2>
                        <p>Центрального района <br> г. Тольятти</p>
                    </div>
                </div>
                <div class="eye" onclick="eyee()">
                    <img src="img/eye.svg" alt="eye">

                </div>
            </div>
            <ul class="nav">
            <li class="navLi"><a href="index.php">Главная</a> </li>
                <li class="navLi"><a href="news.php">Новости</a></li>
                <li class="navLi"><a href="event.php">Мероприятия</a></li>
                <li class="navLi"><a href="info.php">Контакты</a></li>
                <li class="navLi"><a href="">Волонтеры</a></li>
            </ul>
            <div class="burgerMenu" onclick="burgerMenu(this)">
                <div class="b1"></div>
                <div class="b2"></div>
                <div class="b3"></div>
            </div>
        </div>
    </header>s
    <div class="info container">
        <h2><span class="color">О</span> нас</h2>
        <p class="color2">Инвормация о нашей <br> организации</p>
        <div class="block_img_info">
            <img src="img/block_oNas.png" alt="">
            <div class="block_text_oNas">
                <h2>“ВОИ”</h2>
                <p>Всероссийское общество инвалидов создано 18 июля 1988 года. Сегодня ВОИ – это более 1465 человек, 18 первичsных ячеек. В 1998 году ВОИ присвоен Специальный консультативный статус при Экономическом и Социальном Совете ООН.
                </p>
                <h2>Наши цели</h2>
                <ul>
                    <li>Содействие инвалидам в осуществлении равных прав и возможностей с другими гражданами Российской Федерации</li>
                    <li>Защита общих прав и интересов инвалидов</li>
                    <li>Содействие в интеграции инвалидов в современное общество</li>
                </ul>
            </div>
        </div>
        <h2 class="h2_info_end">Основные напрвления деятельности ВОИ</h2>
        <ul class="info_text_last">
            <li>
                Взаимодействие с органами государственной власти и местного самоуправления в решении проблем инвалидов, сотрудничество с общественными объединениями и иными организациями, действующими в интересах инвалидов.
            </li>

            <li>
                Содействие в разработке государственных, муниципальных и негосударственных программ, в подготовке законодательных и иных нормативных актов, принимаемых в отношении инвалидов.
            </li>

            <li>
                Содействие в решении вопросов образования, профессиональной подготовки, переподготовки, трудоустройства, профессиональной и социальной реабилитации и абилитации.
            </li>

            <li>
                Содействие инвалидам в развитии творческих способностей, занятиях физической культурой, спортом и туризмом.
            </li>

            <li>
                Развитие международных контактов и связей инвалидов и их организаций.
            </li>

            <li>
                Осуществление собственных и совместных с другими организациями программ по реабилитации и абилитации членов ВОИ, а также благотворительных программ.
            </li>

            <li>
                Социальная поддержка и защита инвалидов – членов ВОИ.
            </li>

            <li>
                Информирование общества о положении инвалидов, содействие в формировании позитивного отношения общества к инвалидам, разработка и подготовка к изданию информационных материалов о положении инвалидов.
            </li>

            <li>
                Содействие организации научных исследований по проблематике инвалидов и участие в них.
            </li>
        </ul>
        <div class="info2">
            <div class="info_kak">
                <h2><span class="color">Как</span> вступить к нам</h2>
                <p>Что бы узнать что нужно для вступления вы можите позвонить или прийти к нам лично. Для несовершенно летних участников нужно сопровождение <span class="color3">родителя</span> или <span class="color3">законного представителя</span>.
                </p>
                <div class="info_btns">
                    <div class="tel">
                        <img src="img/значок телефона.svg" alt="" srcset="">
                        <a href="">8-800-555-35-35</a>
                    </div>
                    <div class="tel">
                        <img src="img/Значок местоположения.svg" alt="" srcset="">
                        <a href="">Комсомольская <br> 40</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="maps">
            <h2><span class="color">Где</span> нас найти</h2>
            <div class="map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3cd47001aa0265019a50ae4e09e8aa34f7bdf1ef3076b14132106d71db31482d&amp;source=constructor" width="840" height="550" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="tel">
                <img src="img/значок телефона.svg" alt="" srcset="">
                <a href="">8-800-555-35-35</a>
            </div>

            <div class="logo">
                <img src="img/logo.svg" alt="">
                <h2>Общество Инвалидов</h2>
                <p>1988-2022</p>
            </div>

            <div class="tel">
                <img src="img/Значок местоположения.svg" alt="" srcset="">
                <a href="">Комсомольская 40</a>
            </div>
        </div>
        <p>2022 © Всероссийское общество инвалидов.</p>
    </footer>
    <script src="js/hmain.js"></script>
</body>

</html>