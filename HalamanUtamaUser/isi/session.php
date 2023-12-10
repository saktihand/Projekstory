<?php
session_start(); // Mulai sesi, pastikan ini ada di setiap halaman yang membutuhkan akses ke sesi

if(isset($_SESSION['ID_pengunjung'])) {
    $ID_Pengunjung = $_SESSION['ID_pengunjung']; // Ambil ID pengunjung dari sesi
} else {
    // Jika pengunjung belum login, lakukan penanganan yang sesuai
    $ID_Pengunjung = null; // Atau Anda dapat mengatur nilai default sesuai kebutuhan
}
?>