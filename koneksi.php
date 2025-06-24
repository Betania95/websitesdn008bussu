<?php
$host = "localhost";
$user = "root";
$pass = ""; // Ganti sesuai password MySQL kamu
$db = "ppdb_sdn008";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
