<?php

$existUsers = [
	'test1@test.com',
	'test2@test.com',
	'test3@test.com',
	'test4@test.com',
	'test5@test.com',
	'test6@test.com',
	'test7@test.com',
	'test8@test.com',
	'test10@test.com'
];

$file = fopen("logs.txt","a");

date_default_timezone_set('Europe/Moscow');
$date = date('d/m/Y H:i:s');

$email = $_POST['userEmail'];

if (in_array($email, $existUsers)) {
	echo False;
	fwrite($file, $date . ' Пользователь с email\'ом ' . $email . ' уже существует'."\n");
}
else {
	echo True;
	fwrite($file, $date . ' Пользователь с email\'ом ' . $email . ' успешно зарегистрирован'."\n");
}

fclose($file);

?>