<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/css/styles.css">
</head>
<body>
<div class="wrapper-registration">
    <div class="mid">
        <div class="login-form">
            <form method="post" action="query-login.php">
                <label for="login">Введите логин:</label><br>
                <input type="text" name="login" id="login" placeholder="Введите логин"><br>
                <label for="password">Введите пароль:</label><br>
                <input type="password" name="password" id="password" placeholder="Введите пароль"><br>
                <input type="submit" name="loginBtn" value="Войти">
                <button formaction="registration.php">Регистрация</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>