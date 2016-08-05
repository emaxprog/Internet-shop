<?php
$mysqli=false;
function connectDB(){
    global $mysqli;
    $mysqli=new mysqli("testsite","root","ghjuhfvvbcn96","EmStormDB");
    $mysqli->query("SET NAMES 'utf8'");
}

function closeDB(){
    global $mysqli;
    $mysqli->close();
}

function getArticles(){
    global $mysqli;
    connectDB();

    $result=$mysqli->query("SELECT * FROM `articles`");
    closeDB();
    return resultToArray($result);
}

function resultToArray($result){
    while (($row=$result->fetch_assoc())!=false)
        $array[$row["title"]]=$row;
    return $array;
}
?>
