<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
<div class="container">
<?php

$number = $_POST['number'];
$not;
$durum = "-10";
if ($number <= 100 && $number >= 85)
{
$not = "5";  
}
if ($number < 85&& $number >= 70)
{
$not = "4";  
}
if ($number < 70&& $number >= 50)
{
$not = "3";  
}
if ($number < 50&& $number >= 30)
{
$not = "2";  
}
if ($number < 30&& $number >= 1)
{
$not = "1";  
}
if ($number == 0)
{
$not = "0";  
}

if ($number < 50 && $number > 0)
{
  $durum = "1";
}
if  ($number >= 50){
  $durum = "2";
  
}

?>
<form action="" method="POST">
  <table>
  <td>
      <tr>
        notunuzu girin:
      </tr>
      <tr>
      <input type="text" name="number" max="100">
      </tr>
    </td>
    <td>  
      <tr></tr>
      <tr><input type="submit"  name="notunuz"></tr>
    </td>
</table>
</form>
 <?php  
  echo "notunuz: ".$not;
  echo "<br>";
  if($number > 101 || $number < 0){
    echo "durumunuz: hata!";
  } 
  if($durum == 1){
    echo "durumunuz: kaldı";
  }  
  if($durum == 2){
    echo "durumunuz: geçti";
  }
 ?>

</div>
</div>
</body>
</html>