<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/css/styles.css">
    <script rel="script" type="text/javascript" src="scripts/jQuery/jquery-3.1.0.js"></script>
    <link rel="stylesheet" type="text/css" href="scripts/jquery-ui-1.12.0.custom/jquery-ui.css">
    <script rel="script" type="text/javascript" src="scripts/jquery-ui-1.12.0.custom/jquery-ui.min.js"></script>
    <script rel="script" type="text/javascript" src="scripts/widgets.js"></script>
    <?php session_start();?>
</head>
<body>
<div class="wrapper-registration">
    <div class="mid">
        <div class="registration-form">
            <form method="post" action="query-registration.php">
                <label for="login">Введите логин:</label><br>
                <input type="text" name="login" id="login" placeholder="Введите логин" value="<?=$_SESSION['login']?>"><br>
                <label for="email">Введите email:</label><br>
                <input type="text" name="email" id="email" placeholder="Введите email" value="<?=$_SESSION['email']?>"><br>
                <label for="password">Введите пароль:</label><br>
                <input type="password" name="password" id="password" placeholder="Введите пароль" value="<?=$_SESSION['password']?>"><br>
                <label for="name">Введите имя:</label><br>
                <input type="text" name="name" id="name" placeholder="Введите имя" value="<?=$_SESSION['name']?>"><br>
                <label for="lastname">Введите фамилию:</label><br>
                <input type="text" name="lastname" id="lastname" placeholder="Введите фамилию" value="<?=$_SESSION['lastname']?>"><br>
                <label for="birthday">Введите дату рождения:</label><br>
                <input type="text" name="birthday" id="birthday" placeholder="Введите дату рождения" value="<?=$_SESSION['birthday']?>"><br>
                <input type="submit" name="regBtn" value="Регистрация">
            </form>
        </div>
    </div>
</div>
</body>
</html>