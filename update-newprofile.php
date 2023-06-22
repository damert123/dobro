<?php 
session_start();
include_once("connect.php");


$id = $_SESSION['user']['id'];
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$second_name = filter_var(trim($_POST['second_name']), FILTER_SANITIZE_STRING);
$groupp = $_POST['groupp'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];

if (empty($name) || empty($second_name) || empty($groupp) || empty($age) || empty($phone) || empty($email)) {
    $_SESSION['error_message'] = "Вы не заполнили все необходимые поля.";
    header('Location: ../profile-edit.php');
    exit;
}

if (strlen($name) < 6) {
    $_SESSION['error_name'] .= "Недопустимая длина имени <br>";
    header('Location: ../profile-edit.php');
    exit;
} elseif (preg_match("/^.*([0-9])+.*$/", $name)) {
    $_SESSION['error_name'] .= "В поле Имя есть цифры <br>";
    header('Location: ../profile-edit.php');
    exit;
} else {
    $name = $_POST["name"];
}

if (empty($second_name)) {
    $_SESSION['error_secname'] .= "Вы не заполнили Фамилия. <br>";
    header('Location: ../profile-edit.php');
    exit;
} elseif (preg_match("/^.*([0-9])+.*$/", $second_name)) {
    $_SESSION['error_secname'] .= "В поле Фамилия есть цифры <br>";
    header('Location: ../profile-edit.php');
    exit;
} else {
    $second_name = $_POST["second_name"];
}


if (strlen($second_name) < 4) {
	$_SESSION['error_secname'] .= "Недопустимая длина Фамилии <br>";
	header('Location: ../profile-edit.php');
	exit;
}

if (empty($groupp)) {
    $_SESSION['error_groupp'] .= "Вы не заполнили Группа. <br>";
    header('Location: ../profile-edit.php');
    exit;
}

if (empty($age)) {
    $_SESSION['error_age'] .= "Вы не заполнили Дату рождения <br>";
    header('Location: ../profile-edit.php');
    exit;
} else {
    $birthday = strtotime($age);
    $min_age = strtotime("-14 years");
    if ($birthday > $min_age) {
        $_SESSION['error_age'] .= "Возраст младше 14 лет  <br>";
        $age = $_SESSION['error_age'];
        header('Location: ../profile-edit.php');
        exit;
    } else {
        $age = $_POST["age"];
    }
}

if (empty($phone)) {
    $_SESSION['error_phone'] .= "Вы не заполнили Телефон. <br>";
    header('Location: ../profile-edit.php');
    exit;
} elseif (strlen($phone) < 18) {
    $_SESSION['error_phone'] .= "Недопустимая длина номера <br>";
    header('Location: ../profile-edit.php');
    exit;
}

if (empty($email)) {
    $_SESSION['error_email'] .= "Вы не заполнили Email. <br>";
    header('Location: ../profile-edit.php');
    exit;
} elseif (strpos($email, '@') === false) {
    $_SESSION['error_email'] .= "Неверный формат email";
    header('Location: ../profile-edit.php');
    exit;
}

$currentEmail = $_SESSION['user']['email'];

// Проверка, если новый email не отличается от текущего
if ($email !== $currentEmail) {
    // Выполнение запроса на поиск существующего email-адреса
    $sql = $connect->query("SELECT * FROM `users` WHERE `email` = '$email'");
    $existingUser = mysqli_fetch_array($sql);

    // Проверка наличия результата запроса
    if ($existingUser) {
        $_SESSION['error_email'] .= "Такой email уже есть. <br>";
        header('Location: ../profile-edit.php');
        exit; // Прерывание выполнения скрипта
    }
}

$sql = "UPDATE `users` SET `name`='$name', `phone`='$phone', `email`='$email', `second_name`='$second_name', `age`='$age', `groupp`='$groupp' WHERE `id`='$id'";
mysqli_query($connect, $sql);

$_SESSION['user'] = [
    "id" => $id,
    "name" => $name,
    "second_name" => $second_name,
    "groupp" => $groupp,
    "age" => $age,
    "phone" => $phone,
    "email" => $email,
];

header('Location: ../profile.php');
exit;


?>