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
            <h1>PHP & MySQL: The Missing
                Manual</h1>
        </div>
        <div id="example">Авторизация</div>
        <div id="content">
            <h1>Авторизация в клубе</h1>
            <form id="signin_form" action="login.php" method="POST">
                <fieldset>
                    <label for="username">Имя пользователя:</label>
                    <input type="text" name="username" id="username"
                        size="20" />
                    <br />
                    <label for="password">Пароль:</label>
                    <input type="password" name="password" id="password"
                        size="20" />
                </fieldset>
                <br />
                <fieldset class="center">
                    <input type="submit" value="Вход в клуб" />
                </fieldset>
            </form>
        </div>
        <div id="footer"></div>
    </div>
</body>

</html>