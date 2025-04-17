<?php
include("baglanti.php");
?>
<?php
session_start();
$input_err="";

if(isset($_POST["kayıt"])){

  if(empty($_POST["kullaniciadi"])){
    $input_err= "Fill out every field.";
  }
  else{
    $name=$_POST["kullaniciadi"];
  }
  if(empty($_POST["email"])){
    $input_err= "Fill out every field.";
  }
  else{
    $email=$_POST["email"];
  }
  if(empty($_POST["parola"])){
    $input_err= "Fill out every field.";
  }
  else{
    $password=password_hash($_POST["parola"],PASSWORD_DEFAULT);
  }
  
  
  
if(isset($name) && isset($email) && isset($password)){
  $ekle="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES('$name','$email','$password') ";
//sorgu------
  $calistirekle= mysqli_query($baglanti, $ekle);

  if($calistirekle){
    echo '<div  class="alert alert-success" id="hata" role="alert">
  kayıt başarılı bir şekilde gerçekleşti!
</div>';
  }
  else{
    echo '<div class="alert alert-danger" id="hata" role="alert">
  kayıt eklenirken bir problem oluştu!
</div>';}
 mysqli_close($baglanti);
}}

//--------------------------------------------------

$input_err2="";

if(isset($_POST["giris"])){

  if(empty($_POST["kullaniciadi2"])){
    $input_err2= "Fill out every field.";
  }
  else{
    $name=$_POST["kullaniciadi2"];
  }
  
  if(empty($_POST["parola2"])){
    $input_err2= "Fill out every field.";
  }
  else{
    $password=$_POST["parola2"];
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
      header("location:../profile.php");
      exit;
    }
    else{
      echo '<div  class="alert alert-danger "  role="alert">
  parola yanlış!
</div>';
    }

  }
  else{
    echo '<div  class="alert alert-danger " role="alert">
  kullanıcı adı yanlış!
</div>';
  }

mysqli_close($baglanti);
}
}
?>