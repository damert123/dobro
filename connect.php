<?php 


$connect = mysqli_connect("localhost", "root", "", "dobro");


if ($connect == false) {
	print("Ошибка: Невозможно подключиться к MySQL" . mysqli_connect_error());

	
}



?>