<?php 
        session_start();
        include_once("connect.php");
       



				$email=$_POST['email'];
				$pass= md5($_POST['pass']);

				$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

				if (mysqli_num_rows($check_user) > 0){

					$user = mysqli_fetch_assoc($check_user);

					$_SESSION['user'] = [
						"id" => $user['id'],
						"name" => $user['name'],
						"second_name" => $user['second_name'],
						"groupp" => $user['groupp'],
						"age" => $user['age'],
						"phone" => $user['phone'],
						"email" => $user['email'],
						"role" => $user['role'],
					];
					

					header('Location: ../profile.php');
					

				}else {
					$_SESSION['error_login'] .= "Неверный логин или пароль <br>";
					header('Location: ../login.php');
				}
?>

<pre>
	<?php 
	print_r($user);
	print_r($check_user);?>
			</pre>