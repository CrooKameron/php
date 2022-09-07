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
    for ($i = 0; $i < 101; $i++) {
      if ($i % 2 == 0) {
        $tekmi = "çift";
      }
      if ($i % 2 == 1) {
        $tekmi = "tek";
      }
      echo $i." ". $tekmi."<br>";
    }


    ?>




  </div>
  </div>
</body>

</html>