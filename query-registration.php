<?php include "functions/functions.php"?>
<?php
session_start();
if (isset($_POST['regBtn'])){
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $email=htmlspecialchars($_POST['email']);
    $name=htmlspecialchars($_POST['name']);
    $lastname=htmlspecialchars($_POST['lastname']);
    $birthday=htmlspecialchars($_POST['birthday']);
    $_SESSION['login']=$login;
    $_SESSION['password']=$password;
    $_SESSION['email']=$email;
    $_SESSION['name']=$name;
    $_SESSION['lastname']=$lastname;
    $_SESSION['birthday']=$birthday;
    if(addUser($login,$password,$email,$name,$lastname,$birthday)){
        echo "Вы успешно зарегистрировались {$name}!"."<br>";
        echo "Дата регистрации:".date("D.m.Y")." ".date("H:i:s");
    }
    else{
        echo "Ошибка регистрации";
    }
}
?>