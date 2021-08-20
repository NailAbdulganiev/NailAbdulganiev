<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'auth');

if (!$connect) {
    die('Error connect to DataBase');
}
