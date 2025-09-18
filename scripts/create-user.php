<?php
require_once("connect.php");

$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$url_site = trim($_REQUEST['url_site']);
$vk = trim($_REQUEST['vk']);
$bio = preg_replace('/[\r\n]+/', '<p>', $row['bio']);

$insert_sql = <<<HEREDOC
INSERT INTO `users` (`first_name`, `last_name`, `email`,
`url_site`, `vk`, `bio`) VALUES (
'$first_name',
'$last_name',
'$email',
'$url_site',
'$vk',
'$bio'
)
HEREDOC;
// выполняем запрос вставки данных о пользователе

if (!$mysqli->query($insert_sql)) {
    header("Location: show-error.php?error_message=Ошибка вставки
данных&system_error_message=" . $mysqli->error);
    exit;
} else {
    header("Location: show-user.php");
}
