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
    $bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
    $bilgilerimsor->execute();

    $bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);

    echo"<pre>";
    print_r($bilgilerimcek);
    echo"</pre>";
    */

    $bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
    $bilgilerimsor->execute();

    while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){
        echo "id: ",$bilgilerimcek['bilgilerim_id']; echo"<br>";
        echo "isim: ",$bilgilerimcek['bilgilerim_ad']; echo"<br>";
        echo "soyisim: ",$bilgilerimcek['bilgilerim_soyad']; echo"<br>";
        echo "mail: ",$bilgilerimcek['bilgilerim_mail']; echo"<br>";
        echo "yaş: ",$bilgilerimcek['bilgilerim_yas']; echo"<br>";
        echo"<hr style=\"width:400px; float:left;\">";
        echo"<br>";
    }




    ?>





    </form>
    
</body>
</html>