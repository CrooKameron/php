<?php require_once 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>crud işlemleri</title>
</head>
<body>
    <h1>veritabanı pdo kayıt işlemleri</h1>
    <?php if ($_GET['durum'] == "true") echo"<p style=\"color:green;\">kayıt başarılı</p>"; ?>
    <?php if ($_GET['durum'] == "false") echo"<p style=\"color:red;\">kayıt başarısız</p>"; ?>
    <hr>
    <form action="send.php" method="POST">
        <input required type="text" name="bilgilerim_ad" placeholder="adınız"> 
        <input required type="text" name="bilgilerim_soyad" placeholder="soyadınız">
        <input required type="email" name="bilgilerim_mail" placeholder="mail adresiniz">  
        <input required type="text" name="bilgilerim_yas" placeholder="yaşınız">
        <button type="submit" name="insertprocsess">gönder</button>
        
    </form>
    
</body>
</html>