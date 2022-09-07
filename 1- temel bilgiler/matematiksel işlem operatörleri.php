<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="style2.css" type="text/css">
</head>
<body>
  <div class="container" style="height:5000px;">
  
<?php 

$number1=50;
$number2=13;
echo "<p>addition</p>";
$addition = $number1+$number2;
echo  "$number1 + $number2 = $addition";
echo"<hr><br>";



echo "<p>extraction</p>";
$extractioon = $number1-$number2;
echo  "$number1 - $number2 = $extractioon";
echo"<hr><br>";


echo "<p>multiplication</p>";
$multiplication = $number1 * $number2;
echo  "$number1 x $number2 = $multiplication";
echo"<hr><br>";



echo "<p>division</p>";
$division = $number1 / $number2;
echo  "$number1 / $number2 = $division";
echo"<hr><br>";

  


?>

</div>
</body>
</html>