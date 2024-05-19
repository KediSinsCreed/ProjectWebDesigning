<?php
session_start();


if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "tüm alanlar doldurulmalıdır.";
        exit;
    }

    
    $to = "e.aponl.25@gmail.com"; 
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    $mailBody = "Ad Soyad: $name\nE-posta: $email\nKonu: $subject\n\nMesaj:\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Mesajınız başarıyla gönderildi!";
    } else {
        echo "Mesajınız gönderilirken bir hata oluştu.";
    }
} else {
    header("Location: iletişim.php");
    exit;
}
?>