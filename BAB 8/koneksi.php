<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'tribunnews';

// Membuat koneksi menggunakan fungsi mysqli_connect()
$koneksi = mysqli_connect($servername, $username, $password, $database);
// Memeriksa koneksi
if (!$koneksi) {
    die('Connection Failed:' . mysqli_connect_error());
}
// Membuat koneksi menggunakan pendekatan berorientasi objek
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>

