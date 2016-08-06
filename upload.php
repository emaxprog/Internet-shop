<?php
$uploaddir="/home/alexandr/public_html/testsite/images/";
$uploadfile=$uploaddir.basename($_FILES["uploadfile"]["name"]);

if(copy($_FILES["uploadfile"]["tmp_name"], $uploadfile)){
    echo "Файл успешно загружен";
}
else{
    echo "Ошибка загрузки";
    exit;
}

// Выводим информацию о загруженном файле:
echo "<h3>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";
?>