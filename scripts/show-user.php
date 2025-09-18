<?
require_once("connect.php");

$user_id = $_REQUEST["user_id"];
// создание строки инструкции SELECT
$select_sql = "SELECT * FROM `users` WHERE `user_id` = " .
    $user_id;
// выполнение запроса
$res = $mysqli->query($select_sql);
if ($res) {
    // получаем возвращаемую строку
    $row = $res->fetch_array();
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    // изображение по умолчанию
    $user_image = "../images/missing_user.png";
    $bio = $row['bio'];
    $email = $row['email'];
    $url_site = $row['url_site'];
    $vk = $row['vk'];
} else {
    die("Ошибка получения пользователя с ID = $user_id");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="wrap">
        <div id="header">
            <h1>PHP & MySQL: The Missing Manual</h1>
        </div>
        <div id="example">Профиль</div>

        <?php require("menu.php"); ?>
        <div id="content">
            <div class="user_profile">
                <h1><?php echo "{$first_name} {$last_name}"; ?></h1>
                <p><img src="<?php echo $user_image; ?>" class="user_pic" />
                    <?php echo $bio; ?></p>
                <p class="contact_info">Поддерживайте связь с <?php echo
                                                                $first_name; ?>:</p>
                <ul>
                    <li>...по электронной почте
                        <a href="<?php echo $email; ?>"><?php echo $email;
                                                        ?></a>
                    </li>
                    <li>...путем
                        <a href="<?php echo $url_site; ?>">посещения его
                            сайта</a>
                    </li>
                    <li>...путем
                        <a href="<?php echo $vk; ?>">отслеживания его сообщений
                            в VK</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="footer"></div>
    </div>
</body>

</html>