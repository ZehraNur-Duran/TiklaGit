<?php
include("baglanti.php");


$nameErr=$passwordErr="";

if(isset($_POST["giris"])){

  if(empty($_POST["kullaniciadi"])){
    $nameErr= "kullanıcı adı boş geçilemez";
  }
  else{
    $name=$_POST["kullaniciadi"];
  }
  
  if(empty($_POST["parola"])){
    $nameErr= "kullanıcı adı boş geçilemez";
  }
  else{
    $password=$_POST["parola"];
  }
  
  
  
if(isset($name)  && isset($password)){

  $secim="SELECT * FROM kullanicilar WHERE kullanici_adi='$name'";
  $calistir= mysqli_query($baglanti, $secim);
  $kayitsayisi= mysqli_num_rows($calistir);

  if($kayitsayisi>0){
    $ilgilikayit =mysqli_fetch_assoc($calistir);
    $hashlisifre=$ilgilikayit["parola"];

    if(password_verify($password,$hashlisifre)){

      session_start();
      $_SESSION["kullanici_adi"]=$ilgilikayit["kullanici_adi"];
      $_SESSION["email"]=$ilgilikayit["email"];
      header("location:deneme.php");
    }
    else{
      echo '<div style="background-color:lightred" >
      şifre yanlış
    </div>';
    }

  }
  else{
    echo '<div style="background-color:lightred" >
  kullanıcı adı yanlış!
</div>';
  }

mysqli_close($baglanti);
}
}


