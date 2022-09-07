<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <meta charset="utf-8">
<link rel="stylesheet" href="style2.css" type="text/css">
</head>
<body>
  <div class="container" style="text-align:left; padding-left:5px;">
<?php 

$yazi = "bEN UdEmy PHP lerI SeVIye KURsUna KAyItLiYIM";
echo "elimizdeki yazı: $yazi";

echo"<br>";

$kucukyazi = strtolower($yazi);
echo "strtolower ile: $kucukyazi"; // strtolower metindeki büyük &p?!5?A3QXtF.uYharflerin tamamını küçük harfe çevirir

echo"<br>";

$buyukyazi = strtoupper($yazi);
echo "strtoupper ile: $buyukyazi"; // strtoupper aynı şekilde metindeki küçük harfleri büyük yapar

echo"<br>";

$ucwords = ucwords($kucukyazi); // metnin kelimelerinin ilk harfini büyük harf yapar diğer harflere etkisi yoktur
echo"strtolower ve ucwords ile: $ucwords";

echo"<br>";

$ucfirst = ucfirst($kucukyazi); // metnin ilk harfini(en baştaki kelimenin) büyük harf yapar diğer harflere etkisi yoktur
echo"strtolower ve ucfirst ile: $ucwords";

echo"<br>";

$strlen = strlen($yazi); //metnin uzunluğunu verir (bu fonksiyon boşlukları da karakter olarak sayar)
echo"strlen ile: $strlen";

echo"<br>";

$substryazi = substr($yazi,0,10); // metnin belirtilen karakter aralığını gösterir
echo"substr ile: $substryazi";
?>

</div>
</body>
</html>