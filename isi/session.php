<?php
session_start(); // Mulai sesi, pastikan ini ada di setiap halaman yang membutuhkan akses ke sesi

if(isset($_SESSION['ID_admin'])) {
    $ID_admin = $_SESSION['ID_admin']; // Ambil ID pengunjung dari sesi
} else {
    // Jika pengunjung belum login, lakukan penanganan yang sesuai
    $ID_admin = null; // Atau Anda dapat mengatur nilai default sesuai kebutuhan
}
?>