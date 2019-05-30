<?php
// konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "osis";
// perintah php untuk akses ke database
mysql_connect($host, $user, $password, $database) or die ("Koneksi Gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");
?>