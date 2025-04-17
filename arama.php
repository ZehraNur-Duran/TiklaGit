<?php 

$kullanici="root";
$parola="";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=tikla_git2', $kullanici, $parola);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Hata raporlamasını açma
} catch (PDOException $e) {
    echo "Veritabanı bağlantı hatası: " . $e->getMessage();
    exit;
}



$kal_il = isset($_POST['kal_il']) ? $_POST['kal_il'] : '';
$var_il = isset($_POST['var_il']) ? $_POST['var_il'] : '';
$tarih = isset($_POST['tarih']) ? $_POST['tarih'] : '';
$yolcu = isset($_POST['yolcu']) ? $_POST['yolcu'] : '';


if(!empty($kal_il) && !empty($var_il)){
        $sorgu = "SELECT * FROM yayınlanan_yol WHERE kal_il LIKE :kal_il AND var_il LIKE :var_il";
        $sonuc = $pdo->prepare($sorgu);
        $sonuc->bindValue(':kal_il', '%' . $kal_il . '%');
        $sonuc->bindValue(':var_il', '%' . $var_il . '%');
        $sonuc->execute();
        $sonucVerileri = $sonuc->fetchAll(PDO::FETCH_ASSOC);

        if (count($sonucVerileri) > 0) {
            // Response değişkenini başlatıyoruz
            $response = "";
        
            // Verileri döngü ile işliyoruz
            foreach ($sonucVerileri as $row) {
                // Her bir sonucu card şeklinde hazırlıyoruz
                $response .= "<div class='card'>
                    <div class='card-header'>
                        <div class='time-route'>
                            <span>09:00 <span class='duration'>4 saat 50</span> 13:50</span>
                            <span class='duration'>" . htmlspecialchars($row['tarih']) . "</span>
                            <span class='route'>" . htmlspecialchars($row['kal_il']) . " - " . htmlspecialchars($row['var_il']) . "</span>
                        </div>
                        <div class='price'>" . htmlspecialchars($row['fiyat']) . "<span class='duration'>TL</span></div>
                    </div>
                    <div class='card-body'>
                        <img src='img/User.jpg' alt='Driver' class='profile-pic'>
                        <div class='driver-info'>
                            <span class='driver-name'>Ersan</span>
                            <span class='rating'>⭐ 5.0</span>
                        </div>
                    </div>
                    <a href='dene.html' class='btn btn-secondary ' role='button' aria-disabled='true'>Add</a>
                </div>
                ";
            }
        
            // Tüm sonuçları tek seferde yazdırıyoruz
            echo $response;
        } else {
            // Eğer sonuç bulunmazsa
            echo "<div class='alert alert-primary' role='alert'>
  Sonuç bulunamadı!
</div>";
        }
    }
else{
    echo "<div class='alert alert-primary mx-auto pt-2' role='alert'>
 kalkış ve varış noktası zorunlu alandır!
</div>";
}






