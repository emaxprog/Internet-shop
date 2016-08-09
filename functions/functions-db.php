<?php
$mysqli;
function connectDB()
{
    global $mysqli;
    $mysqli = new mysqli("testsite", "root", "ghjuhfvvbcn96", "EmStormDB");
    $mysqli->query("SET NAMES 'utf8'");
}

function closeDB()
{
    global $mysqli;
    $mysqli->close();
}

function getArticle($title)
{
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM `articles` WHERE `title` LIKE '$title'");
    closeDB();
    return $result->fetch_assoc();
}

function getArticles()
{
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM `articles`");
    closeDB();
    return resultToArray($result);
}

function resultToArray($result)
{
    while (($row = $result->fetch_assoc()) != false)
        $array[$row["title"]] = $row;
    return $array;
}

function addUser($login, $password, $email, $name, $lastname, $birthday)
{
    global $mysqli;
    connectDB();
    $result = $mysqli->query("INSERT INTO `users` (`login`,`password`,`email`,`name`,`lastname`,`birthday`,`date`) VALUES 
('$login','" . md5("$password") . "','$email','$name','$lastname','$birthday','" . date("d.m.Y") . "')");
    closeDB();
    return $result;
}

function searchUser($login, $password)
{
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM `users` WHERE (`login`='" . $login . "') AND (`password`='" . md5("$password") . "')");
    closeDB();
    return $result->fetch_assoc();
}

?>
