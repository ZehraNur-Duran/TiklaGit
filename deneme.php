<?php
session_start();
if (isset($_SESSION["kullanici_adi"])){

    echo"<h3>".$_SESSION["kullanici_adi"]." HOŞ GELDİN</h3>";
    
}
else{
    echo "bu sayfayı görüntüleme yetkiniz yok";
}