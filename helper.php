<?php

// Informasi koneksi
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sipkopi');

// Membuat koneksi
$db_connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Menangani kesalahan koneksi
if (!$db_connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Lakukan operasi database di sini

// Menutup koneksi setelah selesai
mysqli_close($db_connect);

?>
