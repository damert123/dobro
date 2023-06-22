<?php 
        session_start();
        include_once("connect.php");
       
        
        


			
				$_FILES["image_news"]["name"]; // Имя загруженного файла
				$logo_news = $_POST["logo_news"]; // Заголовок новости
				$text_news = $_POST["text_news"]; // Описание новости
				$count_vol = $_POST["count_vol"]; // Количество волонтеров



				if (empty($logo_news) || empty($text_news) || empty($count_vol)) {
					$_SESSION['error_message'] .= "Вы не заполнили все необходимые поля. <br>";
					header('Location: ../news-added.php');
					exit;
			}
			

		


				if($_FILES["image_news"]["name"] != "")
				{
					$image_news = "news/" . $_FILES["image_news"]["name"];
						copy($_FILES["image_news"]["tmp_name"], "news/" . $_FILES["image_news"]["name"]);
						
						$sql = "INSERT INTO news (image_news, logo_news, text_news, count_vol) VALUES ('$image_news', '$logo_news', '$text_news', '$count_vol')";
				}
				else{
					$_SESSION['error_message'] .= "Вы не заполнили все необходимые поля. <br>";
					header('Location: ../news-added.php');
				}


				// Подготовка SQL-запроса для вставки данных в таблицу news
				// $sql = "INSERT INTO news (image_news, logo_news, text_news, count_vol) VALUES ('$image_news', '$logo_news', '$text_news', '$count_vol')";
		
				// Выполнение SQL-запроса
				if ($connect->query($sql) === TRUE) {
					$_SESSION['message'] .= "Данные успешно добавлены в таблицу news.";
					header('Location: ../news-added.php');
				} else {
						echo "Ошибка при добавлении данных: " . $connect->error;
						header('Location: ../news-added.php');
				}
		



?>