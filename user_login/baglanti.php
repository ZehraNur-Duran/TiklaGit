<?php

$host="localhost";
$kullanici="root";
$parola="";
$vt="tikla_git2";

$baglanti=mysqli_connect($host,$kullanici,$parola,$vt);
mysqli_set_charset($baglanti,"UTF8");

if(mysqli_connect_errno() >0){
    echo "".mysqli_connect_error()."";
}


 
