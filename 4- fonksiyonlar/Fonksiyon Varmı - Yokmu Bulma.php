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
        function yaz($a)
        {
            return $a;
        }


        if (function_exists("yaz")) { //function_exists bir sorgu operatörüdür ve fonksiyonun olup olmadığını sorgular
            echo ("fonksiyon var");
        } else {
            echo ("fonksiyon yok");
        }
        ?>

    </div>
    </div>
</body>

</html>