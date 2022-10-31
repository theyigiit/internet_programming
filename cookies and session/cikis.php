<?php
session_start();
session_destroy();
  
echo "Çıkış işlemi tamamlandı.";
echo "<br><a href=index.php>Anasayfa</a>";
?>