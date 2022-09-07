<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
  <div class="container">
<?php 
date_default_timezone_set('europe/Istanbul');

$zaman = date("d-m-y h:i:s"); 
$sonuc = explode(" ",$zaman);
echo "tarih: ".$sonuc[0]." "."saat: ".$sonuc[1];

?>
</div>

</div>
</body>
</html>