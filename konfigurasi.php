<?php
// konfigurasi.php
$konfigurasi = new mysqli('localhost', 'root', '', 'pendataan_siswa');

// memeriksa konfigurasi
if ($konfigurasi->connect_error) {
        die("konfigurasi ke database gagal: " . $konfigurasi->connect_error);
}
?>