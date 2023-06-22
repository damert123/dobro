<?php 
			session_start();
			include_once("connect.php");

			// Очистка переменных перед использованием
			// $_SESSION['error_name'] = "";
			// $_SESSION['error_secname'] = "";
			// $_SESSION['error_groupp'] = "";
			// $_SESSION['error_age'] = "";
			// $_SESSION['error_phone'] = "";
			// $_SESSION['error_pass'] = "";
			// $_SESSION['error_email'] = "";


			


			

		$id = $_SESSION['user']['id'];
		$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
		$second_name = filter_var(trim($_POST['second_name']), FILTER_SANITIZE_STRING);
		$groupp = $_POST['groupp'];
		$age = $_POST['age'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		
		

		if ($_POST["name"] && $_POST["second_name"] && $_POST["groupp"] && $_POST["age"] && $_POST["phone"] && $_POST["email"]) 
		{
			if (empty($name)) {
				$_SESSION['error_name'] .= "Вы не заполнили Имя. <br>";
				header('Location: ../profile-edit.php');
				exit;
		}
		
		if (strlen($name) < 3) {
				$_SESSION['error_name'] .= "Недопустимая длина имени <br>";
				header('Location: ../profile-edit.php');
				exit;
		} else{
			$name=$_POST["name"];
		}

				if (preg_match("/^.*([0-9])+.*$/", $name)) {
					$_SESSION['error_name'] .= "В поле Имя есть цифры <br>" ;
					header('Location: ../profile-edit.php');
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
					header('Location: ../profile-edit.php');
				}

				if (preg_match("/^.*([0-9])+.*$/", $second_name)) {
					$_SESSION['error_secname'] .= "В поле Фамилия есть цифры <br>" ;
					header('Location: ../profile-edit.php');
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
					header('Location: ../profile-edit.php');
				}

				if($_POST["age"] == ""){
					$_SESSION['error_age'] .= "Вы не заполнили Дату рождения <br>";
					header('Location: ../profile-edit.php');
					
				}else {
					$birthday = strtotime($_POST["age"]);
					$min_age = strtotime("-14 years");
					if ($birthday > $min_age) {
						$_SESSION['error_age'] .= "Возраст младше 14 лет  <br>";
							$age=$_SESSION['error_age'];
							header('Location: ../profile-edit.php');
					} else {
							$age = $_POST["age"];
							
					}
			}

				if($_POST["phone"] != "")
				{
						$phone=$_POST["phone"];
						if (strlen($phone) < 18) {
							$_SESSION['error_phone'] .= "Недопустимая длина номера <br>";
							header('Location: ../profile-edit.php');
						}
				}
				else
				{
					$_SESSION['error_phone'] .= "Вы не заполнили Телефон. <br>";
					header('Location: ../profile-edit.php');
				}


				if($_POST["email"] != "")
				{
						$email=$_POST["email"];
						if (strpos($email, '@') === false) {
							// 		// Если символ "@" не найден, выполните действия, которые должны произойти, если email неверен
							$_SESSION['error_email'] .= "Неверный формат email";
							header('Location: ../profile-edit.php');
				}
			}
				else
				{
					$_SESSION['error_email'] .= "Вы не заполнили Email. <br>";
					header('Location: ../profile-edit.php');
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
		
				
				if($_SESSION['error_name'] == "" && $_SESSION['error_secname'] == "" && $_SESSION['error_groupp'] == "" && $_SESSION['error_age'] == "" && $_SESSION['error_phone'] == "" && $_SESSION['error_email'] == "" )
				{		
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
				}
				
								
			}
							
							
						
							
						print_r($_POST);



				print_r($_SESSION);
				
					
						
					

?>