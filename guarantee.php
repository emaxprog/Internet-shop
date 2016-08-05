<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Интернет-магазин</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/css/about/styles-about.css">
    <script rel="script" type="text/javascript" src="scripts/jQuery/jquery-3.1.0.js"></script>
    <link rel="stylesheet" type="text/css" href="scripts/jquery-ui-1.12.0.custom/jquery-ui.css">
    <script rel="script" type="text/javascript" src="scripts/jquery-ui-1.12.0.custom/jquery-ui.min.js"></script>
    <script rel="script" type="text/javascript" src="scripts/checkFeedback.js"></script>
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
                <div class="guarantee">
                    <h1>Гарантия</h1>
                    <h2>Товары оригинальные</h2>
                    <article>
                        <p>
                            Все товары, продаваемые в нашем магазине, являются оригинальными.
                        </p>
                    </article>
                    <h2>Гарантия официальная</h2>
                    <article>
                        <p>
                            На все товары распространяется гарантия соответствующих сервисных центров,
                            указанных в гарантийных талонах (сервисных книжках) - от 1 года и более.
                            На ряд товаров мы предоставляем дополнительную гарантию от нашей компании.
                            В случае поломки или обнаружения каких-либо дефектов в работе,
                            приобретенных в наших магазинах товаров, обратитесь в сервисные центры,
                            указанные в вашем гарантийном талоне.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-footer clearfix">
    <div class="mid">
        <?php include "include/footer.php"?>
    </div>
</div>
</body>
</html>