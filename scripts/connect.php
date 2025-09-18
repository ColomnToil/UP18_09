<?
require_once('app-config.php');
$mysqli = new mysqli(
    DATABASE_HOST,
    USERNAME,
    PASSWORD,
    DATABASE_NAME
);
// if ($mysqli->connect_errno) {
//     echo 'Не удалось подключиться к MySQL: ' . $mysqli->connect_error;
// } else {
//     echo 'Подключение к MySQL выполнено успешно';
// }
