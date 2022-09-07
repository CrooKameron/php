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

/*
                echo"==================== tek koşul ekleme ===================================== <br>";
                echo"koşul : bilgilerim_yas değeri 32 ye eşit ise<br><br>";

    $bilgilerimsor=$db->prepare("SELECT * from bilgilerim WHERE bilgilerim_yas=:bilgilerim_yas"); // bu kod bloğuyla birlikte bilgilerim_yas değerleri 32 olan veritabanındaki tablo sütunlarının içindeki bilgilerim_ad değerlerini  $bilgilerimcek değişkenine eşitledik
    $bilgilerimsor->execute(['bilgilerim_yas' => 32]
        
    );
    while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC))
    {
        echo $bilgilerimcek['bilgilerim_ad']; echo "<br>";
    }
*/


    ?>
    <table style="width:50%;" border="1">
        <tr>
            <th>s. no</th>
            <th>ID</th>
            <th>ad</th>
            <th>soyad</th>
            <th>mail</th>
            <th>yaş</th>
            <th width="50">işlemler</th>
        </tr>
    <?php
            $bilgilerimsor=$db->prepare("SELECT * from bilgilerim"); 
        $bilgilerimsor->execute();
        $i=0;
        while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){$i++; ?>
                                                                 <!--  ^       -->
                                                                 <!--  burada s. no için while döngüsünde bir sayaç oluşturduk      -->
    

        <tr>
            <td><?php echo$i;  ?></td>
            <td><?php echo$bilgilerimcek["bilgilerim_id"] ?></td>
            <td><?php echo$bilgilerimcek["bilgilerim_ad"] ?></td>
            <td><?php echo$bilgilerimcek["bilgilerim_soyad"] ?></td>
            <td><?php echo$bilgilerimcek["bilgilerim_mail"] ?></td>
            <td><?php echo$bilgilerimcek["bilgilerim_yas"] ?></td>
            <td align="center"><a href=""><button>sil</button></a></td>
        </tr>
        <?php } ?>
    </table>





    </form>
    
</body>
</html>