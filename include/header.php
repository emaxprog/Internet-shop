<header class="header">
    <div class="logotype">
        <img src="images/logotype.png" alt="Логотип" title="Логотип">
    </div>
    <div class="contacts">
        <ul>
            <li>
                8(800)000-00-00
            </li>
            <li>
                8(863)52-0-00-00
            </li>
        </ul>
    </div>
    <div class="authorizations">
        <?php
        session_start();
        if ($_SESSION['status'] == "login") {
            ?>
            <div class="login">
                <span>Здравствуйте, <?= $_SESSION['name']." ".$_SESSION['lastname'] ?></span>
                <a href="/functions/logout.php">Выход</a>
            </div>
            <?php
        } else {
            ?>
            <ul>
                <li>
                    <a href="login.php">Войти</a>
                </li>
                <li>
                    <a href="registration.php">Регистрация</a>
                </li>
            </ul>
        <?php }
        ?>
    </div>
</header>