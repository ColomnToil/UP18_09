<?
require_once("connect.php");

$first_name = "Кристофер Джон";
$last_name = "Вильсон";
$user_image = "../images/missing_user.png";
$bio = "Кристофер Джон Вильсон - старт-питчер бейсбольной команды
Техас Рейнджерс. После нескольких лет выступлений в качестве релифпитчера,в 2010 году дебютировал в качестве стартера Рейнджерс, а в
2011 году стал штатным стартером команды. Левша, известен своим
крутым характером,толстыми ожерельями из веревок и целым набором из
устрашающих противника вещей.<p>Кристофер Джон не только
бейсболист, но и автогонщик, и предпочитает домашнему безделью
южноафриканское сафари.</p>";
$email = "mailto:wilson@exasrangers.com";
$url_site = "http://wilson.exasrangers.com";
$vk = "https://vk.com/j_wilson";
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