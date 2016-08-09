<?php include "functions-db.php" ?>
<?php
session_start();
if (isset($_POST['loginBtn'])){
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    unset($_SESSION['error']);
    $_SESSION['login']=$login;
    $_SESSION['password']=$password;
    if($user=searchUser($login,$password)){
        $_SESSION['status']="login";
        $_SESSION['name']=$user['name'];
        $_SESSION['lastname']=$user['lastname'];
        header("Location: /");
    }
    else{
        $_SESSION['error']="Неправильно введен логин или пароль";
        header("Location:/login.php");
    }
}
?>