<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
<div class="container">
<hr>

<?php
for ($i=1; $i < 100; $i++) { 
  echo $i."<br>";
  if ($i == 50) {
    echo "50. sayıya ulaştık!";
    break; // içine yazıldığı döngüyü durdurur
  }
}


?>




</div>
</div>
</body>
</html>