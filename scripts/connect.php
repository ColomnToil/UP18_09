<?
require_once('app-config.php');

$mysqli = new mysqli(
    DATABASE_HOST,
    USERNAME,
    PASSWORD,
    DATABASE_NAME
);
// if ($mysqli->connect_error) {
//     header("Location: show-error.php?error_message=Ошибка подключения к
// серверу MySQL&system_error_message=" . $mysqli->connect_error);
//     exit;
// } else {
//     echo 'Подключение к MySQL выполнено успешно';
// }
