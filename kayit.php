<?php
include("baglanti.php");
include("giris.php");

$nameErr=$emailErr=$passwordErr="";

if(isset($_POST["kayıt"])){

  if(empty($_POST["kullaniciadi"])){
    $nameErr= "kullanıcı adı boş geçilemez";
  }
  else{
    $name=$_POST["kullaniciadi"];
  }
  if(empty($_POST["email"])){
    $nameErr= "kullanıcı adı boş geçilemez";
  }
  else{
    $email=$_POST["email"];
  }
  if(empty($_POST["parola"])){
    $nameErr= "kullanıcı adı boş geçilemez";
  }
  else{
    $password=password_hash($_POST["parola"],PASSWORD_DEFAULT);
  }
  
  
  
if(isset($name) && isset($email) && isset($password)){
  $ekle="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES('$name','$email','$password') ";

  $calistirekle= mysqli_query($baglanti, $ekle);

  if($calistirekle){
    echo '<div style="background-color:lightgreen">
  kayıt başarılı.
</div>';
  }
  else{
    echo '<div style="background-color:lightred" >
  kayıt başarısız!
</div>';}
 mysqli_close($baglanti);
}}
?>