<?php 
session_start();
include_once("connect.php");

if(!$_SESSION['user']){
    header('Location: index.php');
}



// $originalDate = $_SESSION['user']['age']; // Предположим, что это значение получено из базы данных в формате "гггг-мм-дд"
// $convertedDate = date("d.m.Y", strtotime($originalDate)); // Преобразуем формат даты в "дд.мм.гггг"
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

    <form action="update-newprofile.php" method="post">
        <div class="profile-block container">
            <div class="profile-main">
                <div class="profile-logo-ava">
                    <div class="profile-avatar">
                        <img src="img/profile_logo.png" alt="">
                    </div>
                    <button href=""> <img src="img/ei_plus.png" alt=""> Загрузить фото</button>
                    <button type="submit"><img src="img/uil_pen.png" alt=""> Сохранить</button>
                </div>

                <div class="profile-block-info">
                    <div class="profile-block-about">
                        <div class="profile-info-first">
                            <div class="prfl-name">
                                <p>Имя</p>
                                <input name="name" class="gray <?php if(isset($_SESSION['error_name'] )){echo 'error';}?>"" type="text" value="<?php echo $_SESSION['user']['name']; ?>">
                                <?php
                        if(isset($_SESSION['error_name'])){
                            echo '<p class="message"> '. $_SESSION['error_name'] .'</p>';
                            unset($_SESSION['error_name']);
                        }
                        ?>
                            </div>
                            <div class="prfl-name">
                                <p>Телефон</p>
                                <input name="phone" class=" <?php if(isset($_SESSION['error_phone'])){echo 'error';} ?> gray" type="text" id="phone" oninput="formatPhoneNumber()" maxlength="18" value="<?php echo $_SESSION['user']['phone']; ?>">
                                <?php
                        if(isset($_SESSION['error_phone'])){
                            echo '<p class="message"> '. $_SESSION['error_phone'] .'</p>';
                            unset($_SESSION['error_phone']);
                        }
                    ?>
                            </div>
                            <div class="prfl-name">
                                <p>Email</p>
                                <input name="email" class="gray <?php if(isset($_SESSION['error_email'])){echo 'error';}?>" type="text" value="<?php echo $_SESSION['user']['email']; ?>">
                                <?php
                        if(isset($_SESSION['error_email'])){
                            echo '<p class="message"> '. $_SESSION['error_email'] .'</p>';
                            unset($_SESSION['error_email']);
                        }
                    ?>
                            </div>

                        </div>

                        <div class="profile-info-first">
                            <div class="prfl-name">
                                <p>Фамилия</p>
                                <input   name="second_name" class="gray <?php if(isset($_SESSION['error_secname'])){echo 'error';}?>"   type="text" value="<?php echo $_SESSION['user']['second_name']; ?>">
                                <?php
                        if(isset($_SESSION['error_secname'])){
                            echo '<p class="message"> '. $_SESSION['error_secname'] .'</p>';
                            unset($_SESSION['error_secname']);
                        }
                    ?>
                            </div>
                            <div class="prfl-name">
                                <p>Дата рождения</p>
                                <input name="age" class="gray <?php if(isset($_SESSION['error_age'])){echo 'error';}?>"  value="<?php echo $_SESSION['user']['age']; ?>" style="font-size: 18px;" type="date" >
                                <?php
                        if(isset($_SESSION['error_age'])){
                            echo '<p class="message"> '. $_SESSION['error_age'] .'</p>';
                            unset($_SESSION['error_age']);
                        }
                    ?>
                                
                            </div>
                            <div class="prfl-name">
                                <p>Группа</p>
                                <select name="groupp" id=""  class="gray <?php if(isset($_SESSION['error_groupp'])){echo 'error';}?>">
                                            <option selected value="<?php echo $_SESSION['user']['groupp']; ?>">Ваша группа: <?php echo $_SESSION['user']['groupp']; ?></option>
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


                        </div>
                    </div>
                    <div class="profile-about" >
                    <?php
                        if(isset($_SESSION['error_message'])){
                            echo '<p class="message"> '. $_SESSION['error_message'] .'</p>';
                            unset($_SESSION['error_message']);
                        }
                        ?>
                        <p>О себе</p>
                        <textarea style="border: 2px solid #a2a2a2;" name="" id="" cols="30" rows="10"></textarea>
                    </div>

                </div>


            </div>




        </div>

    </form>



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
    <script src="js/form.js"></script>





</body>

</html>