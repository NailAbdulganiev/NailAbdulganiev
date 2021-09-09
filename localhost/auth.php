<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="css/img/flag-round-250.png">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь!</a>
        </p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="/js/script.js"></script>
</body>

</html>