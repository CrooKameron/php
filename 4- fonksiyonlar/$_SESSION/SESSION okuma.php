<?php
session_start(); //neden olması gerektiğini bilmediğim bir sebepten ötürü eğer bir sessiona başka bir sayfada değer verilmiş ise önce o sayfayı ziyaret etmeniz gerekir aksi takdirde session geçersiz olacaktır

echo $_SESSION['adsoyad'];

echo "<br>";

echo $_SESSION['il']

?>