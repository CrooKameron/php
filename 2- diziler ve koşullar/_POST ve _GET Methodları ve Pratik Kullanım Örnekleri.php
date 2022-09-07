<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
  <div class="container">
<?php 

echo "adınız: ".$_GET['ad'];
echo"<br>";
echo "soyadınız: ".$_GET['soyad'];

$kullanici_id=151;

/* //burası sadece üstteki 3 satır kodun _POST hali
echo "adınız: ".$_POST['ad'];
echo"<br>";
echo "soyadınız: ".$_POST['soyad'];
*/

?>

<form action="islem.php" method="GET"> <!-- _POST gizli bir şekilde aktarırken _GET veriyi urlnin içinde aktarır -->
ad <input type="text" name="ad" placeholder="adınızı girin">
soyad <input type="text" name="soyad" placeholder="soyadınızı girin">
<input type="submit" value="formu gönder" name="">
</form>

<a href="islem.php?kullanici_id=<?php echo $kullanici_id ?>"><button>Kullanıcıyı sil</button></a>


</div>

</div>
</body>
</html>