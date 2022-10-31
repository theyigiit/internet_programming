<?php
include("ayarlar.php");
session_start();
  
if(($_POST["kullanici"]==$kullanici) and ($_POST["parola"]==$parola))
{
$_SESSION["giris"] = true;
$_SESSION["kullanici"] = $kullanici;
$_SESSION["parola"] = $parola;
header("Location:yonetim.php");
}
else
echo "Kullanıcı adı veya Şifre Yanlış.<br>";
echo "<a href=index1.php>Geri dön</a>";
?>