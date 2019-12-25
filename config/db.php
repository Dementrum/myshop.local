<?php
/**
 *
 * Инициализация подключения к БД
 *
 *
 */

$dblocation = "127.0.0.1";
$dbname = "myshop";
$dbuser = "root";
$dbpasswd = "";

// соединяемся с БД
$db = mysqli_connect($dblocation, $dbuser, $dbpasswd);

if (! $db) {
    echo 'Ошибка доступа к MySql';
    exit();
}

// Устанавливаем кодировку по умолчанию для текущего соединения
mysqli_set_charset($db, "utf8");

if (!mysqli_select_db($db, $dbname)){
    echo "Ошибка доступа к базе данных: {$dbname}";
    exit();
}