<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="style2.css" type="text/css">
</head>
<body>
  <div class="container">
<?php 

$sayi = rand(0,100);
echo"rastgele üretilen sayı: $sayi <br>";
if ($sayi >= 50){
  echo"kazandın!";
}
else if($sayi < 50) {
  echo"kaybettin";
}


?>

</div>
</body>
</html>