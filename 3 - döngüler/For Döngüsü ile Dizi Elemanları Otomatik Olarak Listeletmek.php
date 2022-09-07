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

     

    $arrayeleman = array("elma","armut","üzüm","kavun","karpuz");

    // echo "<pre>"; print_r($arrayeleman); echo "</pre>"; // array'ın içindekileri görmemize yarayan bir yardımcı kod

    $c = count($arrayeleman); // array(dizi)'nin içindeki eleman sayısını int olarak değere dönüştürür
    for ($i=0; $i < $C; $i++) { 
      echo $arrayeleman[$i]; echo"<br>";
    }



    ?>




  </div>
  </div>
</body>

</html>