<?php
// Параметры подключения к базе данных
$host = 'db'; // имя контейнера MySQL
$dbname = 'botec-web';
$user = 'botec-web';
$password = 'botec-web';

// Попытка соединения с базой данных
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // Установка режима обработки ошибок для PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $status = 'Connection status: Ok';
} catch (PDOException $e) {
    $status = 'Connection status: Not ok';
}

// Вывод статуса соединения на страницу
echo $status;
?>