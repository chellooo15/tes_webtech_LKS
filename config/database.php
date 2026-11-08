<?php
$host = '103.119.237.131';
$dbname = 'cpdicx55109_db_cooperative';
$username = 'cpdicx55109_db_cooperative';
$password = 'chello12900';

$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
 $pdo = new PDO($dsn, $username, $password, $options);
 // $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false]);
} catch (PDOException $e) {
 http_response_code(500);
 die('Koneksi database gagal. Periksa config/database.php dan pastikan database db_cooperative sudah diimpor.');
}
