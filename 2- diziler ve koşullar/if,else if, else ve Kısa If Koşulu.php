<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
  <div class="container">


<?php 

/*

==    eşit ise
===   aynısı ise
<     küçük ise
>     büyük ise
<=    küçük veya eşit ise
>=    büyük veya eşit ise

*/

$say = 5;
if($say == 5) echo "bu sayı 5 tir";
else echo "bu sayı 5 değildir"; // '{}' kullanmadan oluşturulan if else yapısı



echo $say=='800' ? '' : '';//kısa if/else yapısı




$deger = 'armut';//burdaki değere göre aşağıdaki elemanlara <selected> tagı eklenmektedir
?>
<br>
<select name="" id="">
<option <?php echo $deger=='armut' ? 'selected' : '' ?>>armut</option>
<option <?php echo $deger=='elma' ? 'selected' : '' ?>>elma</option>
</select>

</div>

</div>
</body>
</html>