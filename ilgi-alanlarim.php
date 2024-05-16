
   
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
        <title>İlgi Alanlarım</title>
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
            <h2>İlgi Alanlarım</h2>
                    <p>İlgi alanlarım şunlardan oluşmaktadır: Futbol, Voleybol, Bilgisayar Oyunları (Özellikle strateji türü), Sohbet etmek, söyleşi veya sosyalleşmek, kodlama, yazılım...</p>
                    <p>Futbola olan ilgim öyle aman aman olmasa da insanın arasıra ter atması ve o tempoyla birlikte ciğerlerinin açılması insanı çok rahatlatan şeylerden birisi. Futbola olan ilgimi kıran şeyler arasında 2 Elimi aynı anda futbol oynarken kırmak ve çatlatmak olmasaydı daha çok üstünde duracağım şeylerden biri olurdu diye zannediyorum.</p>
                    <p>Gelelim voleybola. Voleybolu lise dönemimde daha sık oynamaya başladığımı söyleyebilirim. İster öğlen aralarında, ister tenefüslerde, isterseniz de boş derslerinizde tercih edebileceğiniz bir oyun. Benim onu sevme nedenlerimden birisi de yorucu olmamasıdır, çünkü ben gerçekten normal zamanda dahi çok kolay ve çabuk terleyebilen bi insan olduğum için terlemiş olmak beni gün boyu rahatsız eder.</p>
                    <p>Bilgisayar oyunlarından mevzu açmak gerekirse ben kendimi bildim bileli evimizde bilgisayar vardı, Ben küçükken fazla tercih etmiyor olsam bile ikonikleşmiş olan NFSU2, GTA SAN, ve Vice City, Farming simulator, Euro Truck Simulator, Mount and Blade ve Çeşitli oyunları oynayarak büyüdüm. Evimize internet bağlandığı vakitler o zamanın çocuklarına göre daha geçti ki bunu ben bir avantaj olarak görüyorum.</p>
                    <p>Evet! gördüğünüz gibi sohbet etmek, ama bu tabii ki de herhangi birisi ile değil. Sohbet etmeyi bilen, oturduğunuzda konunun konuyu açtığı ve konuların laubali olmadığı, Sohbet ehli insanlar ile sohbet etmeyi çok severim. Bizi insan yapan biz yapan değerlerden birisi de bu gelişmiş iletişim ve anlatı becerilerimiz olsa gerek zaten.</p>
                    <p>Kodlama ve yazılım kısmı hakkında düşüncelerim başlarda da aslında hemen hemen aynı olsa dahi, verdiği özgürlük ve yönelim serbestliğinin sunduğu dünyayı hiçbir meslek sunamaz. Çünkü sen ileride istediğin herhangi bir konuda, hayalin ne olursa olsun; bunu simüle eden, veyahut bizzat uygulayan sistemler oluşturabilirsin.</p>
                
            </div>
        </div>
        <div class="col-md-6">
            <div class="image">
             
                <br><br><p>Sırasıyla görseller.</p>
                
                <img id="oyunfoto1" src="https://e1.pxfuel.com/desktop-wallpaper/897/633/desktop-wallpaper-nfs-underground-2-350z-nissan-350z-aesthetic-ps4.jpg" alt="NFSU Resmi" width="444">
                <p></p>
                <img id="oyunfoto2" src="https://cdn.cloudflare.steamstatic.com/steam/apps/1546990/ss_df005e43791b1be1d3949b1e4ef3cafb29b6850a.1920x1080.jpg?t=1676922450" alt="vice city" width="424">
                <p></p>
                <img id="oyunfoto3" src="https://teachyourkidscode.com/wp-content/uploads/2022/02/best-coding-language-for-games.jpg" alt="kod foto" width="444">
                <p></p>
                <img src="icardi.WEBP" width="444">
                <p></p>
                
            </div>
        </div>
    </div>
</div>

    </html>