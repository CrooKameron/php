<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <link rel="stylesheet" href="main.css" type="text/css">
</head>

<body>
  <div class="container">
    <hr>
    <form action="" method="POST">
      <input type="text" name="sayi1">
      <input type="text" name="sayi2">
      <button type="submit" name="submittrigger">submit</button>
    </form>
    <?php

    function topla($sayi1, $sayi2)
    {
      echo $sayi1 + $sayi2;
    }
    
    $number1 = $_POST['sayi1'];
    $number2 = $_POST['sayi2'];

    topla($number1,$number2);
    ?>

  </div>
  </div>
</body>

</html>