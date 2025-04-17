
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Search</title>
    <link rel="stylesheet" href="Publish_ride.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   

</head>

<body>
    <!-- MDB -->
    <nav>
        <a href="index.html"><img src="img/logo.png" class="logo"></a>
        <ul class="nav-links">
        </ul>
        <a href="user_login/signin-signup.php" class="profile"> <img src="img/user.png"></a>
    </nav>
    <div class="container1">
        <div class="header">
            <h1>Your pick of rides at low prices</h1>
            <div class="banner">
                <div class="img-banner">
                    <img src="img/welcom.png" alt="">
                </div>
            </div>
            <div class="search-bar">
                <form method="post" class="search-bar-form">
                    <div class="location-input">
                        <label>Leaving from</label>
                        <input type="text" name="kal-il" id="kal-il" placeholder="Leaving from">

                    </div>
                    <div class="location-input">
                        <label>Going to</label>
                        <input type="text" name="var-il" id="var-il" placeholder="Going to">

                    </div>

                    <div class="location-input">
                        <label>Date</label>
                        <input type="date" id="birthday" name="tarih">
                    </div>
                    <div>
                        <label>Passenger</label>
                        <input type="text" name="yolcu" placeholder="Passenger">
                    </div>
                    <input style="border:2px solid #4481eb;border-radius:50% 50%; padding:15px;background-color: #4481eb;" type="submit" id="ara" name="ara" value="Ara">
                </form>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    // Form submit olayını dinliyoruz
    $(".search-bar-form").submit(function(e){
        e.preventDefault(); // Formun normal submit işlemini engelliyoruz

        // Form verilerini topluyoruz
        var kal_il = $("#kal-il").val();
        var var_il = $("#var-il").val();
        var tarih = $("input[name='tarih']").val();
        var yolcu = $("input[name='yolcu']").val();

        // Veriyi AJAX ile gönderiyoruz
        $.ajax({
            url: "arama.php",  // PHP dosyasına istek göndereceğiz
            type: "POST",     // POST metoduyla veri göndereceğiz
            data: {
                kal_il: kal_il,   // Leaving from
                var_il: var_il,   // Going to
                tarih: tarih,     // Date
                yolcu: yolcu      // Passenger
            },
            success: function(sonuc) {
                // Gelen sonucu #sonuclar div'ine yazdırıyoruz
                $("#sonuclar").html(sonuc);
            },
            error: function(hata) {
                // Hata durumunda #sonuclar div'ine hata mesajını yazdırıyoruz
                $("#sonuclar").html("Hata oluştu: " + hata.statusText);
            }
        });
    });
});
</script>
<div class="container"></div>
        <div id="sonuclar">
           
        </div>
<!-- ********************************** -->

            
 </body>
