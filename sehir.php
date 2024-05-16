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
    <title>Şehrim</title>
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
        <div class="col-md-6">
            <div class="content">
            <h2>Şehrim</h2>
                <p>Yaşadığım yer Konya'nın Cihanbeyli ilçesidir. Cihanbeyli,  Ankara ile Konya arasında kalan, En büyük yüz ölçüme sahip ilçe olmakla birlikte adını İlçenin kendisinden alan Cihanbeyli Platosu üzerinde bulunmaktadır.</p>
                <p>Kendisinin yaklaşık 30 bin, köyleri ile birlikte toplam 50-60 binlik bir nüfusu bulunmaktadır. Yerel halkın çoğunluğu tır şöförü ve çiftçidir. Buna neden olan faktörler arasında tarım yapılabilecek arazilerin çok olması çiftçi sayısının çok olmasına, Ülkenin merkezinde olması; Konya'daki sanayi ve tarım mahsüllerinin tarladan fabrikalara veyahüt depolara ya da depodan tarlaya nakliyesine oldukça ihtiyaç duyulduğundan nüfusun büyük bir kısmını oluşturmaktadır.
                <p>Her ne kadar cihanbeyli'nin şu güzelliği ve bu gezilecek yeri var diye anlatmak istesem de maalesef ki anlatacağım pek bir yanı bulunmamakta. Ancak genel olarak iklime ve yaşantıya bakacak olursak kendi deneyimlerimi aktarmak isterim;</p><p>Öncelikli olarak gelen tabiki de havası. Oldukça Kurak bir bozkır havası hüküm sürmekte, Ülkenin tamamında en az yağış alan ve Tuz gölüne yakınlığı nedeniyle de doğal bitkilerin(tarım olanlar hariç) büyümesi için elverişsiz olmasından ötürü genellikle ölü çimlerden, yani adını bozkır olarak bildiğimiz; dikenlerden ve kurak topraklardan oluşan bir arazisi bulunmaktadır. İnsan yerleşkelerine yakın olmayan yerlerde ağaç görmeniz imkansız veya imkansıza çok yakındır. çünkü tuzun bozduğu topraktaki ph, yetersiz ve dengesiz (Çoğu zaman yaz mevsimi girdiğinde 3-4 belki 5 ay yağış düşmez) yağış nedeniyle elverişsizdir.<br><br>
                benim değinmek istediğim bir başka nokta ise Cihanbeyli'den ayrılıp başka yerlere, hatta ve hatta büyük şehirlere gittiğimde binalar bile beni çok daraltırdı. Sebebi ise ufuk çizgimin yükselmesi. Garip gelebilir fakat yaşadığım yer dümdüz olduğu ve küçük bir yerde bulunduğum için kısa boylu binalar bulunduğundan; dağların , yükseltilerin ve çevremi kapatan binaların olduğu yerlerde çok daralma hissi oluşuyordu.<br><br>
                Aklınızda kaldığını düşündüğüm son bir mevzu ise madem bu kadar elverişsiz ve kurak bir toprağı var, nasıl tarım ürünleri yetişiyor?</p><p> bunu etkileyen çok faktör var aslında ama yine de basit bir şekilde değinelim.<br><br> Birincisi tabiki de ekilen arpa, buğday gibi ürünlerin fazla su istemeden yetişebilmesi. Bu besinler, diğer bitkiler kadar suya ihtiyaç duymadan da büyüyebiliyor.<br><br> İkinci sebep ise yeraltı suyunu kuyulardan pompalar vasıtasıyla çekip tarlalara su dağıtımı yapılması. Haberlerde gördüğünüz obrukların oluşma sebeplerinden birisidir kendisi.<br><br>Üçüncü ve sonuncusu da Senenin büyük bir kısmında güneş görmesi ve dümdüz bir araziye sahip olunması. Bu bitkinin ekimini, biçimini, büyümesini en kolaylaştıran faktörlerden birisidir.
                
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
