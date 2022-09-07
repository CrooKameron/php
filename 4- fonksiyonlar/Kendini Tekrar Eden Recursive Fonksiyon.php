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
            <input type="text" name="sayi" > 
            <button type="submit" name="notislemi">OwO</button>
            </form>
        <?php

        $sabit = 1;
        function faktoriyel($a)
        {
            global $sabit;

            if ($a>1) {
                $sabit = $sabit*$a;
                $a--;
                faktoriyel($a);
            }
            return $sabit;
        }
        echo faktoriyel($_POST['sayi']);

        ?>

    </div>
    </div>
</body>

</html>