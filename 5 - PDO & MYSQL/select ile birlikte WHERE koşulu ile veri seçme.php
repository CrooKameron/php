<?php require_once 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>title</title>
</head>
<body>
    <h1>veritabanından veri çekme işlemleri</h1>
    <hr>

    <?php 


                echo"==================== tek koşul ekleme ===================================== <br>";
                echo"koşul : bilgilerim_yas değeri 32 ye eşit ise<br><br>";

    $bilgilerimsor=$db->prepare("SELECT * from bilgilerim WHERE bilgilerim_yas=:bilgilerim_yas"); // bu kod bloğuyla birlikte bilgilerim_yas değerleri 32 olan veritabanındaki tablo sütunlarının içindeki bilgilerim_ad değerlerini  $bilgilerimcek değişkenine eşitledik
    $bilgilerimsor->execute(['bilgilerim_yas' => 32]
        
    );
    while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){
        echo $bilgilerimcek['bilgilerim_ad']; echo "<br>";
    }




    ////////////////////////


                echo"==================== birden fazla koşul ekleme ===================================== <br>";
                echo"koşul : bilgilerim_yas değeri 32 ye eşit ise VEYA bilgilerim_ad değeri arda ya eşit ise <br><br>";

    $bilgilerimsor=$db->prepare("SELECT * from bilgilerim WHERE bilgilerim_yas=:bilgilerim_yas OR bilgilerim_ad=:bilgilerim_ad"); // bu kod bloğunda ise birlikte bilgilerim_yas = 32 VEYA bilgilerim_ad = "ahmet" olan veritabanındaki tablo sütunlarının içindeki bilgilerim_ad değerlerini $bilgilerimcek değişkenine eşitledik
    $bilgilerimsor->execute([                                                              //   ^
        'bilgilerim_yas' => 32,                                                            //  burada OR veya AND kullanabilirsiniz
        'bilgilerim_ad' => "arda"
        
        ]
        
    );
    while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){
        echo $bilgilerimcek['bilgilerim_ad']; echo "<br>";
    }                   //    ^
                        //    buraya yukarıdaki koşul sağlandığında neyi yazdırmak istediğimizi yazıyoruz


    ?>
+




    </form>
    
</body>
</html>