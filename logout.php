<?php
// Oturumu başlat
session_start();

// Oturumu sonlandır
$_SESSION = array(); // Tüm oturum değişkenlerini temizle
session_destroy(); // Oturumu sonlandır

// Kullanıcıyı giriş sayfasına yönlendir
header("location: login.php");
exit;
?>