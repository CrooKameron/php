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

    foreach ($arrayeleman as $meyve) { // array elemanları normal bir string hale çevirir
      echo $meyve;echo" ";
    }


    ?>




  </div>
  </div>
</body>

</html>