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
    <title>Mirasımız</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="styles.css">

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
        <div class="col-md-6">
            <div class="content">
            <h2>Tuz Gölü</h2>
          
            </div>
        </div>
        <div class="col-md-6">
            <div class="image">
              
                <br><br><p>Kırmızı ile gösterilen alan Cihanbeyli,Sol tarafta mavi ile gösterilen Beyşehir Gölü, Sağ üstteki mavi ile gösterilen yer Tuz Gölü'dür.</p>
                
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/ea/Konya_location_Cihanbeyli.PNG" alt="Şehir Resmi" width="444">
                <p></p>
                
                <img src="https://cdnuploads.aa.com.tr/uploads/Contents/2019/03/21/thumbs_b_c_f2cc3af242cf609d4eeb533e7a557032.jpg" alt="Şehir Resmi"width="444" >
                <p></p>
                <img src="adsız.png" alt="yegenlertarla" width="444">
            </div>
        </div>
    </div>
</div>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>