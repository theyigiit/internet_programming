<?php
include("ayarlar.php");
session_start();
  
if(!isset($_SESSION["giris"]))
{
echo "Bu sayfayı görüntüleme yetkiniz yoktur.<br>";
echo "<a href=index.php>Giriş sayfası</a>";
}
else
echo "Admin Paneli<br>";
echo "<a href=\"cikis.php\">Çıkış Yap</a>";
?>