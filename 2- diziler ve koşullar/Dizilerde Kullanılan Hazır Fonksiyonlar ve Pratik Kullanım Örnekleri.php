<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
  <div class="container">
<?php 





  $array1 = array(10,9,8,7,6,12,5,4,3,2,1);
  sort($array1); //dizi elemanlarını küçükten büyüğe sıralar
  echo "<pre>";
  print_r($array1);
  echo "</pre>";
  
  rsort($array1); //dizi elemanlarını küçükten büyüğe sıralar
  echo "<pre>";
  print_r($array1);
  echo "</pre>";

  $array2 = array("a","b","c","d","e","f","g","h");
  sort($array2); //dizi elemanlarını alfabetik şekilde sıralar
  echo "<pre>";
  print_r($array2);
  echo "</pre>";

  rsort($array2); //dizi elemanlarını alfabetik şekilde TERSTEN sıralar
  echo "<pre>";
  print_r($array2);
  echo "</pre>";

  echo in_array(",",$array2); // dizi içerisinde aradığımız değerin olup olmadığını denetler varsa 1 değerini döndürür yoksa hiç bir değer döndürmez
  echo"<br>";

  echo implode("+",$array2); // dizinin içindeki elemanları birleştirir
  echo"<br><br>";

  $zaman= "03-13-2022 6:20";
  $sonuc = explode(" ",$zaman); // metnin veya yazıyı diziye çevirir (explore("buraya yazacağınız karakter metnin hangi karakterlerinden bölünmesini belirler"))
  echo "tarih: ".$sonuc[0]." "."saat: ".$sonuc[1];
  echo"<br>"



?>
</div>

</div>
</body>
</html>