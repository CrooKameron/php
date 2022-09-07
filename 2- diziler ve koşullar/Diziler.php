<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
  <div class="container">
<?php 


$dizi=array("birinci dizi elemanı","ikinci dizi elemanı","üçüncü dizi elemanı","dördüncü dizi elemanı","beşinci dizi elemanı","altıncı dizi elemanı");

echo"<pre>"; // -
print_r($dizi);//dizideki array numaralarını bulmanız için yardımcı olur
echo "</pre>"; // -
echo"<hr><br>";

echo $dizi[0]." ".$dizi[1]." ".$dizi[2]." ".$dizi[3]." ".$dizi[4]; // arraydeki istediğiniz sıradaki elemanı kullanmak için operatörün sonuna[istediğiniz bir sayı(bu sayı 1 yerine 0dan başlar)] koyulur




?>
</div>

</div>
</body>
</html>