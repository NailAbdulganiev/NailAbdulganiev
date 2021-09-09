<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <title>Профиль</title>
    <link rel="shortcut icon" href="css/img/flag-round-250.png">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- Профиль -->
    <div class="wrapper">
        <header>
            <div class="logo">
                <a href="index.html"><img class="graphiclogo" src="/css/img/norway logo.png" alt="Logo"></a>
            </div>
            <nav>
                <div class="topnav" id="myTopnav">
                    <a href="/index.php">Главная</a>
                    <a href="/project.php">Проекты</a>
                    <a href="/blog.php">Блог</a>
                    <a href="/about.php">Обо мне</a>
                    <a href="/register.php">Зарегистрироваться</a>
                    <a href="/vendor/signin.php">Войти</a>
                    <a id="menu" href="#" class="icon">&#9776;</a>
                </div>
            </nav>
        </header>
        <form class="profilestyle">
            <div>
                <p>Фотография профиля:</p><br />
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
                <h2><?= $_SESSION['user']['full_name'] ?></h2>
                <a href="#"><?= $_SESSION['user']['email'] ?></a>
                <br /><br />
                <a href="vendor/logout.php" class="logout">Выход</a>
            </div>
        </form>
        <footer class="footer">
            <h2>Я в социальных сетях</h2>
            <a target="_blank" href="https://vk.com/nailabdulganiev"><img src="/css/img/vk.png" style="width:32px;" alt="VK"></a>
            <a target="_blank" href="https://www.youtube.com/channel/UC2yF84Y6GakHWN3_eC-6tRQ"><img src="/css/img/yt logo.png" style="width:32px; margin: 0 15px 0 15px;" alt="YouTube"></a>
            <a target="_blank" href="https://www.instagram.com/nailabdul73/"><img src="/css/img/instagram.png" style="width:32px;" alt="Instagram"></a>
        </footer>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
        <script src="/js/script.js"></script>
</body>

</html>