<?php
session_start();


if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özgeçmiş</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Ben ve Cihanbeyli</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="sehir.php">Şehrimiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hakkimda.php">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hakkinda.php">Hakkında</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mirasimiz.php">Mirasımız</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Giriş Yap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Çıkış Yap</a>
                </li>
                </ul>
            </div>
        </nav>    
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="https://tasarimfikir.com/wp-content/uploads/profil-fotografi-tasarimi-min.jpg" alt="Your Photo" class="img-fluid rounded-circle">
            </div>
            <div class="col-md-9">
               
                <h1 class="display-4">Emir Abdullah Önal<br><br></h1>
                <h3 class="mb-4">SAÜ Bilgisayar Mühendisliği Öğrencisi<br></h3>

              
                <h4 class="text-left">İletişim</h4>
                <ul>
                    <li>E-posta: e.aponl.25@gmail.com</li>
                    <li>Telefon: 0537 481 97 98</li>
                </ul>

               
                <h4 class="mt-4">İş Deneyimi</h4>
                <p>İş deneyimim yaptığım derslerim için yaptığım ödev ve projelerden ibaret, birisi de bu.</p>
                

               
                <h4 class="mt-4">Eğitim</h4>
                <p>Sırasıyla;<br><br>Adnan Menderes İlkokulu<br>Faik Türkmen Ortaokulu<br>Güven Belgin Anadolu Lisesi Kurumlarında öğrenim gördüm.<br><br> Mevcut olarak Sakarya Üniversitesi Bilgisayar ve Bilişim Fakültesi'nde Bilgisayar Mühendisliği Bölümüne devam ediyorum.
                </p>
                <h4 class="mt-4">Beceriler</h4>
                <p>
                  Müzik ( Söylemek ve Enstrüman çalma)<br>Kodlarken sıkılmamak, severek yapmak.<br>c++, c#, html, php, css ve sql dillerinde giriş-orta seviye bilgi.
                </p>
            
                <h4 class="mt-4">Dil</h4>
                <ul>
                    <li>İngilizce - İleri Seviye</li>
                    <li>Almanca - Giriş Seviyesi</li>
                    <li>Türkçe</li>
                </ul>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>