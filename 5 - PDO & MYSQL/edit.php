<?php require_once 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>crud işlemleri</title>
</head>
<body>
    <h1>veritabanı pdo düzenleme işlemleri</h1>
    <?php 
    if ($_GET['durum'] == "true") echo"<p style=\"color:green; margin: 0 0 0 0 ; float:left;\">düzenleme başarılı!</p> <a style=\"margin:0 0 0 20px;\" href=\"UPDATE ile Veri Düzenleme İslemi.php\">düzenleme sayfasına geri dön</a>";
    if ($_GET['durum'] == "false") echo"<p style=\"color:red; margin: 0 0 0 0 ; float:left;\">düzenleme başarısız!</p> <a style=\"margin:0 0 0 20px;\" href=\"UPDATE ile Veri Düzenleme İslemi.php\">düzenleme sayfasına geri dön</a>"; 
    ?>
    <br><br>
    <hr>


    <?php

      $bilgilerimsor=$db->prepare("SELECT * from bilgilerim where bilgilerim_id=:id");
      $bilgilerimsor->execute(array(
          'id' => $_GET['bilgilerim_id']
        ));
      $bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);
    ?>

    
    <form action="send.php" method="POST">
        <input required type="text" name="bilgilerim_ad" value="<?php echo $bilgilerimcek['bilgilerim_ad'] ?>">
        <input required type="text" name="bilgilerim_soyad" value="<?php echo $bilgilerimcek['bilgilerim_soyad'] ?>">
        <input required type="email" name="bilgilerim_mail" value="<?php echo $bilgilerimcek['bilgilerim_mail'] ?>">
        <input required type="text" name="bilgilerim_yas"  value="<?php echo $bilgilerimcek['bilgilerim_yas'] ?>">
        <input type="hidden" value="<?php echo $bilgilerimcek['bilgilerim_id'] ?>" name="bilgilerim_id">
        <button type="submit" name="updateislemi">formu düzenle</button>
    </form>
    
    
</body>
</html>