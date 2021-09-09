<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Nail Abdulganiev</title>
    <link rel="shortcut icon" href="css/img/flag-round-250.png">
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
</head>

<body>
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
        <div class="main">
            <div class="block-1">
                <h2>Кто такой Наиль Абдулганиев?</h2>
                <p class="hellopeople">
                    Привет, меня зовут Наиль и я студент... да 😥. Но ты не расстраивайся, я учусь на программиста, хотя
                    учеба мне не нравится 😥. Поэтому я учусь на программиста, а точнее на frontend-разработчика у себя
                    дома.
                    Видишь, всё это я смастерил сам. И моё самообразование приносит мне удовольствие. Сейчас я активно
                    изучаю html, css, javascript. Это основа основ вёрстки сайтов.
                    Тебе наверно интересно, как я выгляжу (хотя кого я обманываю). Bruh, в общем, вот пару моих фоток ↴
                </p>
                <div class="image__wrapper">
                    <img src="/css/img/5.jpg" class="minimized" alt="Клик для увеличения" />
                    <img src="/css/img/7.jpg" class="minimized" alt="Клик для увеличения" />
                    <img src="/css/img/3.jpg" class="minimized" alt="Клик для увеличения" />
                    <img src="/css/img/8.jpg" class="minimized" alt="Клик для увеличения" />
                    <img src="/css/img/2.jpg" class="minimized" alt="Клик для увеличения" />
                </div>
                <p class="hellopeople">
                    У меня есть свой Youtube канал. Там совсем немного подписчиков и это из-за моей лени. Тематика там
                    разная, но в основном просветительская и философская. А вот и ссылка на него →
                    <a style="color: #000; text-decoration:underline" href="https://www.youtube.com/channel/UC2yF84Y6GakHWN3_eC-6tRQ" target="_blank" class="yt">Youtube
                        канал</a>
                    <img class="ytlogo" src="/css/img/yt logo.png" alt="Logo" />
                </p>
                <!--</div>
            <div class="block-2"-->
                <h2 class="h2">Немного о моей учёбе.</h2>
                <p class="myEducation">
                    Хорошего в этом маловато. Так сложилось, что я попал в тот город и в тот ВУЗ, в который вообще не
                    хотел. Я реально усердно готовился к ЕГЭ, но мои баллы меня не удовлетворили (242 балла: информатика 77
                    баллов, профильная математика: 74 балла, русский язык: 91 балл и ещё обществознание: 81 балл), но в Москву
                    на бюджет с такими баллами можно пройти. Конечно, в ВУЗы похуже, но всё же. Естественно, я рассматривал
                    Москву. В первую волну, меня выкинули в последние полчаса, а во вторую волну случился баг в личном кабинете,
                    лишивший меня бюджетного места в МГТУ Станкин. Было очень обидно, грустно, я впал в депрессию. А ещё из-за
                    Covid-19 все сроки были передвинуты, и я узнал, что никуда не поступил 27 августа. В результате, пришлось
                    подать на платку в региональный ВУЗ: Ульяновский политех. Вот такая вот история. <br><br>
                    Сейчас закончил первый курс и удивительно, что закончил на отлично. Правда, знаний у меня почти нет
                    нисколько. Возможно, дальше я буду более замотивирован учёбой и этот проект и изучение
                    web-разработки даст мне толчок в развитии навыков программиста. Буду улучшать свой сайт, чтобы им можно было
                    гордиться и показывать пример верстки, которую я могу сделать.
                </p>
            </div>
        </div>
        <footer class="footer">
            <h2>Я в социальных сетях</h2>
            <a target="_blank" href="https://vk.com/nailabdulganiev"><img src="/css/img/vk.png" style="width:32px;" alt="VK"></a>
            <a target="_blank" href="https://www.youtube.com/channel/UC2yF84Y6GakHWN3_eC-6tRQ"><img src="/css/img/yt logo.png" style="width:32px; margin: 0 15px 0 15px;" alt="YouTube"></a>
            <a target="_blank" href="https://www.instagram.com/nailabdul73/"><img src="/css/img/instagram.png" style="width:32px;" alt="Instagram"></a>
        </footer>
    </div>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="/js/script.js"></script>
</body>

</html>