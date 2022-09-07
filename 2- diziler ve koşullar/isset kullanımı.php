<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
<div class="container">
<form action="" method="POST">
<input type="text" name="not" > 
<button type="submit" name="notislemi">OwO</button>
</form>
<hr>
<?php

if  (isset($_POST['notislemi'])){ // isset daha önce bir elemana değer atanıp atanmadığını kontrol eder, eğer başına ünlem konulursa tam tersi görevini yapar

    $not = $_POST['not'];
    if($not < 50)
    {
        echo"kaldınız!";
    }
    if ($not > 51)
    {
        echo"geçtiniz!";
    }

}



?>



</div>
</div>
</body>
</html>