<?php 
		session_start();
		include_once("connect.php");

		
		
		

		$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
		$second_name = filter_var(trim($_POST['second_name']), FILTER_SANITIZE_STRING);
		$groupp = $_POST['groupp'];
		$age = $_POST['age'];
		$phone = $_POST['phone'];
		$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
		$email = $_POST['email'];



		if(isset($_POST["name"]) && isset($_POST["second_name"]) && isset($_POST["groupp"]) && isset($_POST["age"]) && isset($_POST["phone"]) && isset($_POST["pass"]) && isset($_POST["email"]))
		{
				if($_POST["name"] != "")
				{
						$name=$_POST["name"];
						if (strlen($name) < 3) {
							$_SESSION['error_name'] .= "Недопустимая длина имени <br>";
							header('Location: ../reg.php');
					}
				}
				else
				{
					$_SESSION['error_name'] .= "Вы не заполнили Имя. <br>";
				}

				if (preg_match("/^.*([0-9])+.*$/", $name)) {
					$_SESSION['error_name'] .= "В поле Имя есть цифры <br>" ;
					header('Location: ../reg.php');
				}

				else 
				{
						$name=$_POST["name"];
				}

				if($_POST["second_name"] != "")
				{
						$second_name=$_POST["second_name"];
				}
				else
				{
					$_SESSION['error_secname'] .= "Вы не заполнили Фамилия. <br>";
					header('Location: ../reg.php');
				}

				if (preg_match("/^.*([0-9])+.*$/", $second_name)) {
					$_SESSION['error_secname'] .= "В поле Фамилия есть цифры <br>" ;
					header('Location: ../reg.php');
			}

			else 
			{
					$second_name=$_POST["second_name"];
			}

				if($_POST["groupp"] != "")
				{
						$groupp=$_POST["groupp"];
				}
				else
				{
					$_SESSION['error_groupp'] .= "Вы не заполнили Группа. <br>";
					header('Location: ../reg.php');
				}

				if($_POST["age"] == ""){
					$_SESSION['error_age'] .= "Вы не заполнили Дату рождения <br>";
					header('Location: ../reg.php');
					
				}else {
					$birthday = strtotime($_POST["age"]);
					$min_age = strtotime("-14 years");
					if ($birthday > $min_age) {
						$_SESSION['error_age'] .= "Возраст младше 14 лет  <br>";
							$age=$_SESSION['error_age'];
							header('Location: ../reg.php');
					} else {
							$age = $_POST["age"];
							
					}
			}

				if($_POST["phone"] != "")
				{
						$phone=$_POST["phone"];
						if (strlen($phone) < 18) {
							$_SESSION['error_phone'] .= "Недопустимая длина номера <br>";
							header('Location: ../reg.php');
						}
				}
				else
				{
					$_SESSION['error_phone'] .= "Вы не заполнили Телефон. <br>";
					header('Location: ../reg.php');
				}

				
				if ($_POST["pass"] != "") {
					$pass = $_POST["pass"];
					if (strlen($pass) < 3) {
						$_SESSION['error_pass'] .= "Пароль должен содержать не менее трех символов. <br>";
						header('Location: ../reg.php');
					}
			} else {
				$_SESSION['error_pass'] .= "Вы не заполнили Пароль. <br>";
				header('Location: ../reg.php');
			}


			$pass= md5($pass);

				if($_POST["email"] != "")
				{
						$email=$_POST["email"];
						if (strpos($email, '@') === false) {
							// 		// Если символ "@" не найден, выполните действия, которые должны произойти, если email неверен
							$_SESSION['error_email'] .= "Неверный формат email";
				}
			}
				else
				{
					$_SESSION['error_email'] .= "Вы не заполнили Email. <br>";
					header('Location: ../reg.php');
				}

				$sql = $connect->query(" SELECT * FROM `users` WHERE `email` = '$email' ");
				$myTable = mysqli_fetch_array($sql);

				if($myTable){
					$_SESSION['error_email'] .= "Такой email уже есть. <br>";
					header('Location: ../reg.php');
				}



				
							if($_SESSION['error_name'] == "" && $_SESSION['error_secname'] == "" && $_SESSION['error_groupp'] == "" && $_SESSION['error_age'] == "" && $_SESSION['error_phone'] == "" && $_SESSION['error_pass'] == "" && $_SESSION['error_email'] == "" )
							{
							$connect->query("INSERT INTO `users` (`name`, `second_name`, `groupp`, `age`, `phone`, `pass`, `email`)
							VALUES ('$name', '$second_name', '$groupp', '$age', '$phone', '$pass', '$email')");
							
								header('Location: ../reg.php');
							}
					
					
					
				 
					
					
}













		

	// 	if(mb_strlen($name) < 3 || mb_strlen($name) > 50 )  {
	// 		echo "Ндопустимая длина Имени";
	// 		exit();
	// 	}	else if(mb_strlen($second_name) < 3 || mb_strlen($second_name) > 50  ) {
	// 		echo "Ндопустимая длина Фамилии";
	// 		exit();
	// 	}else if(mb_strlen($phone) < 18) {
	// 		echo "Ндопустимая длина Номера";
	// 		exit();
	// 	}else if(mb_strlen($pass) < 3 || mb_strlen($pass) > 50  ) {
	// 		echo "Ндопустимая длина Пароля (от 3 до 50 символов)";
	// 		exit();
	// 	}else if (strpos($email, '@') === false) {
	// 		// Если символ "@" не найден, выполните действия, которые должны произойти, если email неверен
	// 		echo "Неверный формат email";
	// 		exit; // выходим из проверки
	// }
		
		
?>