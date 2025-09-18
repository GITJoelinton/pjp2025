<?php
$host = '127.0.0.1';
$db = 'escola';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$pdo = new PDO($dsn, $user, $pass, $options);

function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}



