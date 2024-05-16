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
        <title class ="text-left">Benim Hakkımda</title>
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
    
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2>Hakkında</h2>
                    <p>Merhabalar, Ben Emir Abdullah Önal. Sakarya Üniversitesi Bilgisayar Mühendisliği 1.sınıf öğrencisiyim. Burada bu web sitesinde, Web programlama dersim için hazırladığım projeyi sunmaktayım. Proje kapsamında kendimi ve memletekim Cihanbeyli'yi tanıtıyor olacağım. Ben kendimi size yeteri kadar sevecen, samimi, genellikle arkadaş gruplarında etrafındakileri güldüren o kişi olarak tanıtabilirim. Şimdi ise gelelim ben değil de , benimle alakalı olanlara. Futbol, Voleybol, Bilgisayar Oyunları, Sohbet etmek, söyleşi veya sosyalleşmek ve kodlamaya ilgim olduğunu söyleyebilirim.</p>
                    <p>Memleketime gelecek olursak memleketim Cihanbeyli, eskiden küçük bi yerde yaşayıp büyümüş olmanın dezavantaj olduğunu düşündüğüm ama şuan tam tersi olduğunu anladığım yerdir. Bu projede bahsettiğim üzere Cihanbeyli ve kendimi sizlere tanıtıyor olacağım.<br><br>Ulaşmak istediğiniz yerlere yukardaki menüyü kullanarak ulaşabilirsiniz. </p>
              </div>
            </div>
        </div>
    </body>
    </html>