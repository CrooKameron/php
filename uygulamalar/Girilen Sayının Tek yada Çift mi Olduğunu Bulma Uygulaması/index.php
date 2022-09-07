<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
<div class="container">
<form action="" method="POST">
<input type="text" name="value1" > 
<button type="submit" name="submittriggered">OwO</button>
</form>
<hr>
<?php

if  (isset($_POST['submittriggered'])){

    $value1 = $_POST['value1'];

    echo "sayı:".$value1 ; //  ($örnekeleman % 2 == 0 sondaki değer 0 sa çift 1 ise tektir
    echo "<br>";
    if  ($value1 % 2 == 0){
        $tekmiciftmi = "çift";
    }
    if  ($value1 % 2 == 1){
        $tekmiciftmi = "tek";
    }
    echo "bu sayı ".$tekmiciftmi;

    

}



?>



</div>
</div>
</body>
</html>