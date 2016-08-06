<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Интернет-магазин</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/css/contacts/styles-contacts.css">
    <script rel="script" type="text/javascript" src="scripts/jQuery/jquery-3.1.0.js"></script>
    <link rel="stylesheet" type="text/css" href="scripts/jquery-ui-1.12.0.custom/jquery-ui.css">
    <script rel="script" type="text/javascript" src="scripts/jquery-ui-1.12.0.custom/jquery-ui.min.js"></script>
    <script rel="script" type="text/javascript" src="scripts/checkFeedback.js"></script>
    <?php include "functions/functions.php"?>
</head>
<body>
<div class="wrapper-header">
    <div class="mid">
        <?php include "include/header.html"?>
    </div>
</div>
<div class="wrapper-menu">
    <div class="mid">
        <?php include "include/menu.php" ?>
    </div>
</div>
<div class="wrapper-content">
    <div class="mid">
        <div class="content">
            <?php include "include/left.html" ?>
            <div class="center">
                <div class="contacts">
                    <h1>Контакты</h1>
                    <section class="contacts-phone">
                        <div class="phone-img">
                            <img src="images/content/Contacts/icon-phone.png">
                        </div>
                        <span>8(900)-000-00-00</span>
                    </section>
                    <section class="contacts-email">
                        <div class="email-img">
                            <img src="images/content/Contacts/icon_contacts.png">
                        </div>
                        <span>user@mail.ru</span>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-footer">
    <div class="mid">
        <?php include "include/footer.php"?>
    </div>
</div>
</body>
</html>