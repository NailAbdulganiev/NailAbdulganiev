<?php

//$connect = mysqli_connect('sql208.hostronavt.ru', 'onavt_29506866', 'Qwerty000', 'onavt_29506866_auth');
$connect = mysqli_connect('localhost', 'root', 'root', 'auth');
$connect->set_charset("utf8");
if (!$connect) {
    die('Error connect to DataBase');
}
