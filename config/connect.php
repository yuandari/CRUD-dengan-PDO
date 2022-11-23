<?php
$host = "localhost";
$db_name = "db_mahasiswa";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// to handle connection error
catch (PDOException $exception) {
    echo "Gagal terkoneksi ke database: " . $exception->getMessage();
}
