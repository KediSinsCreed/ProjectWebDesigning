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
          <p>Tuz Gölü , Cihanbeyli'ye geldiğinizde görmek isteyeceğiniz şeylerde en başta gelebilecek güzelliklerden biridir. Tuz Gölü, Dünya'nın en büyük tuz, Türkiye'nin ise Van Gölü'nden sonraki en  büyük gölüdür. Flamingoları ile ünlüdür.</p>
        <p>Tuz Gölü'nde Temmuz-Ekim, havaların durumuna göre Kasım ayına kadar tuz çıkarma sezonu olur. Tuzu parçalayarak Kamyonların kasalarına atan bu iş için özel yapılmış makinalar vasıtası ile tuz çıkartılır. Genellikle hafriyat tipi kamyonlar kullanılır. Tuz Kamyonlar gibi makineler için hayati riske sahiptir bu yüzden düzenli olarak oldukça detaylı bir biçimde her türlü aksanını yıkamanız gerekir, aksi takdirde demir aksamlar paslanır; çürür ve kullanılamaz hale gelir. </p>   
        <p>Tuz Gölü, tıpkı bir çölde deneyimleyebileceğiniz şekilde birsürü parçalara ayrılmış taneciklerin bulunmasından ötürü gündüzleri çok sıcak, geceleri ise dayanılmaz derecede soğuk olabilir. Abim ve Babam da Nakliyeci, Tır kamyon şoförleri oldukları için her yaz sezonunda Tuz Gölü'nde çalışırlar. Bazen vardiyalı bir şekilde, bazense tuz gölü dışında olan herhangi bir iş fırsatından ötürü tek vardiya çalışmaktadırlar.</p>
        <p>Büyük ihtimalle biliyorsunuz ama değinmeden olmaz tabii ki. Tuz Gölü, flamingolar ile ünlü bir göldür. Flamingolar burayı oldukça çok tercih eder, senenin belli dönemlerinde sürü halinde buraya gelirler. Ayrıca eşsiz bir manzarası vardır, Beyaz renkli ve su içerisinde olması onun içindeyken ışıktan bir hüzmenin içindeymişsiniz hissiyatı verir. </p> 
        <p>Tuz gölü ve etrafında, belirli bir yarıçapta maalesef ki çoğu bitki türü yaşayamamakta, tuzun bozduğu ph değerleri canlıları öldürmekte veyahut yaşamalarına engel olmaktadır. Ayrıca iç anadolunun oldukça kurak bir iklime sahip olması da cabası.</p>    
    </div>
        </div>
        <div class="col-md-6">
            <div class="image">
              
                <br><br><p>Tuz Gölü'ne ait manzara fotoğrafları
                </p>
                
                <img src="tuzgölü2" alt="tuzgölü Resmi" width="444">
                <p></p>
                
                <img src="https://isbh.tmgrup.com.tr/sbh/2021/10/01/650x344/turkiyenin-tuz-ihtiyacinin-yuzde-60ini-karsilayan-1633080643918.jpg" alt="tuzgölü tuz çıkarma"width="444" >
                <p></p>
                <img src="tuzgölü" alt="tuzgölü resmi" width="444">
                <p></p>
            </div>
        </div>
    </div>
</div>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>