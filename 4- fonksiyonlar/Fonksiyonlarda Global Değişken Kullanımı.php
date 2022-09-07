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
    $b=10;
    function ekle($a){
        global $b; // fonksiyonlar dışardan gelen değişkenleri kabul etmezler eğer fonksiyon içinde dışardan tanımlanmış bir değişkeni kullanmak istiyorsanız bu satırdaki gibi tanımlamanız gerekir
        return $a + $b;
    }

    echo ekle(20);



?>

  </div>
  </div>
</body>

</html>