<?php 
session_start();
$host="localhost";
$kullanici="root";
$parola="";
$vt ="tikla_git2";
$bag =mysqli_connect($host,$kullanici,$parola,$vt);
mysqli_set_charset($bag,"UTF8");




if(isset($_POST["save"])){
    $kal_il =$_POST["il"];
    $kal_ilce =$_POST["ilce"];
    $var_il =$_POST["il-go"];
    $var_ilce =$_POST["ilce-go"];
    $plaka =$_POST["plaka"];
    $tarih =date('Y-m-d', strtotime($_POST['tarih']));
    $adres =$_POST["adres"];
    $email =$_POST["email"];
    $fiyat =$_POST["fiyat"];
    $sayı =$_POST["yolcu"];

    if(isset($kal_il) && isset($kal_ilce) && isset($var_il) && isset($var_ilce) && isset($plaka) && isset($adres) && isset($email) && isset($fiyat) && isset($sayı) )
    {
        $save = "INSERT INTO yayınlanan_yol (kal_il, kal_ilce, var_il, var_ilce, plaka, tarih, adres, email, fiyat, yolcu_say) VALUES ('$kal_il','$kal_ilce','$var_il','$var_ilce','$plaka','$tarih','$adres','$email','$fiyat','$sayı')";
        $sorgu =mysqli_query($bag, $save);
    }
}
