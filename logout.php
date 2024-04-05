<?php
session_start(); // Mulai sesi PHP
unset($_SESSION['loggedIn']);
session_destroy(); // Hapus semua data sesi yang tersimpan
header('Location: index.php'); // Arahkan pengguna ke halaman login
exit; // Hentikan eksekusi skrip PHP