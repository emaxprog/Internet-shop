<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/css/styles.css">
    <?php session_start();?>
</head>
<body>
<div class="wrapper-login">
    <div class="mid">
        <div class="login-form">
            <div class="form">
                <h1>Вход</h1>
                <?php
                if(isset($_SESSION['error'])) {
                    ?>
                    <div class="error"><?= $_SESSION['error'] ?></div>
                    <?php
                }
                ?>
                <form method="post" action="functions/query-login.php">
                    <label for="login">Введите логин:</label><br>
                    <input type="text" name="login" id="login" class="txtarea" placeholder="Введите логин"><br>
                    <label for="password">Введите пароль:</label><br>
                    <input type="password" name="password" id="password" class="txtarea" placeholder="Введите пароль"><br>
                    <div class="buttons">
                        <input type="submit" name="loginBtn" class="button" value="Войти">
                        <button formaction="registration.php" class="button">Регистрация</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>