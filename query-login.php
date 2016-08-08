<?php include "functions/functions.php"?>
<?php
session_start();
if (isset($_POST['loginBtn'])){
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $_SESSION['login']=$login;
    $_SESSION['password']=$password;
    if($user=searchUser($login,$password)){
        echo "Вы успешно вошли {$user['name']}!"."<br>";
        echo "Дата регистрации:".$user['date'];
    }
    else{
        echo "Ошибка входа";
    }
}
?>