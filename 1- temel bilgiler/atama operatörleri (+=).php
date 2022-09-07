<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="style2.css" type="text/css">
</head>
<body>
  <div class="container">
  <hr>
<?php 

$atama = 400;
echo "\$atama değişkeninin en baştaki değeri ".$atama;
      //yukarıdaki '\' işareti yoksayma operatörüdür
      echo "<hr>";

      $atama += 500; // varsayılan değerin üstüne ekleme,çıkarma,çarpma veya bölme yapar ('=' den önce girdiğiniz matematiksel operatör ifadesine bağlı olarak)
echo "\$atama değişkeninin değeri (+= 500 kullanıldığında): ".$atama;
echo "<hr>";
  

$atama -= 500;
echo "\$atama değişkeninin değeri (-= 500 kullanıldığında): ".$atama;
echo "<hr>";

$atama /= 500;
echo "\$atama değişkeninin değeri (/= 500 kullanıldığında): " .$atama;
echo "<hr>";


$atama *= 500;
echo "\$atama değişkeninin değeri (*= 500 kullanıldığında): ".$atama;
echo "<hr>";

?>

</div>
</body>
</html>