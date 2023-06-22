<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Tspk-logo.png" type="image/x-icon">
    <title>Добро=Счастье</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->

    <?php include_once("header.php"); ?>
    <!-- Блок новости -->

    <div class="container news">
        <h1 class="anim_items">Новости</h1>
        <h2 class="anim_items">Последние новости о нас</h2>
        <div class="news_blocks">
            <article class="new_block">
                <h3>Всероссийский творческий конкурс «КОНТЕКСТ» </h3>

                <img src="img/logo_news.jpg" class="logo-news" alt="тут фотка новостей" onclick="location.href = 'new.php';"><br>

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
        </div>
        <a class="btn_more" href="news.html">Читать больше</a>
        <img src="" alt="">
    </div>

    <!-- Конец блока с новостями -->

    <!-- блок основная информация -->


    <div class="main_info container">
        <h1></h1>
        <div class="block_main_info anim_items">
            <div class="info_text">
                <h2>Коротко о нас:</h2>
                <p> <span class="color">«Добро=Счастье»</span> - это волонтерский отряд Тольяттинского социально-педагогического колледжа, готовый оказывать помощь и принимать активное участие в любых направлениях добровольческой деятельности. Мы активные,
                    позитивные, всегда и всем готовые прийти на помощь!
                </p>
            </div>

            <img src="img/logo_info.jpg" alt="info_img">

        </div>
        <div class="block_main_info anim_items">
            <div class="info_text">
                <h2>О сотруднечестве с нами:</h2>
                <p> Мы сотрудничаем со <span class="color3">множеством</span> других организаций которые устраивают мероприятия и поездки в различные места для проведения волонтерских мероприятий.</p>


            </div>

            <img src="img/logo_info3.jpg" alt="info_img">

        </div>
        <div class="block_main_info anim_items">
            <div class="info_text">
                <h2>Достижения:</h2>
                <p> Мы гордимся нашими достижениями в добровольческой деятельности. За прошедший год мы провели успешные акции по благоустройству города, оказали помощь нуждающимся и участвовали в различных мероприятиях, способствующих развитию общества.
                </p>


            </div>
            <img src="img/logo_info2.png" alt="info_img">
        </div>
    </div>


    <div class="container stats-logo">
        <h1><span class="color">Наша</span> статистика</h1>
    </div>
    <div class="stats container">

        <div class="block-stats  ">
            <div class="text-stats ">
                <h1>30+</h1>
                <p>Добрых дел</p>
            </div>
        </div>

        <div class="block-stats ">
            <div class="text-stats">
                <h1>280+</h1>
                <p>Волонтеров</p>
            </div>
        </div>

        <div class="block-stats ">
            <div class="text-stats">
                <h1>4700+</h1>
                <p>Часов</p>
            </div>
        </div>
    </div>


    <div class="call-text container">
        <h1>Стать <span style="color: #3F3E46;">волонтером</span></h1>
    </div>
    <div class="call-back container">

        <div class="call-block">

            <div class="call-input" placeholder="Имя Фамилия">
                <h2>Заполните форму</h2>
                <p>Имя </p>
                <input type="text" placeholder="Введите Имя ">

            </div>

            <div class="call-input">
                <p>Фамилия</p>
                <input type="text" placeholder="Введите Фамилия">
            </div>

            <div class="call-input">
                <p>Группа</p>
                <select name="" id="">
                    <option value="">ИСиП-31</option>
                    <option value="">ИСиП-32</option>
                    <option value="">ИСиП-33</option>
                    <option value="">ИСиП-21</option>
                    <option value="">ИСиП-22</option>
                    <option value="">ИСиП-11</option>
                    <option value="">ИСиП-12</option>
                </select>
            </div>

            <div class="call-input">
                <p>Телефон</p>
                <input type="text" id="phone" placeholder="Введите номер телефона" oninput="formatPhoneNumber()" maxlength="18">
            </div>
            <div class="call-input">
                <p>Пароль</p>
                <input type="text" placeholder="Пароль">
            </div>

            <div class="call-input">
                <p>Email</p>
                <input type="text" placeholder="example@mail.ru">
            </div>



            <div class="btn-call">
                <button>Зарегистрироваться</button>
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
                <p>2019-2023г © Волонтерский центр ГАПОУ ТСПК</p>

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



    <script src="js/form.js"></script>
    <script src="js/anim.js"></script>
    <script src="js/hmain.js"></script>
    <script src="js/scrollMain.js"></script>
    <script src="js/index-main.js"></script>
</body>

</html>