<?php
// konfigurasi DB
$host = "localhost";
$dbname = "dbpuskesmas";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$dbname";

// koneksi
$dbh = new PDO($dsn, $user, $pass);

?>