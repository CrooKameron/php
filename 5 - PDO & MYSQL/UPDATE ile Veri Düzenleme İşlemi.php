<?php require_once 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>title</title>
</head>
<body>
    <h1>veritabanından veri çekme işlemleri</h1><?php
    if ($_GET['durum'] == "true") echo"<p style=\"color:green; margin: 0 0 0 0 ;\">düzenleme başarılı!</p>";
    if ($_GET['durum'] == "false") echo"<p style=\"color:red; margin: 0 0 0 0 ;\">düzenleme başarısız!</p>"; 
    ?>
    <hr>
    <table style="width:60%;" border="1">
        <tr>
            <th>s. no</th>
            <th>ID</th>
            <th>ad</th>
            <th>soyad</th>
            <th>mail</th>
            <th>yaş</th>
            <th width="50" colspan="2">işlemler</th>
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
            <td align="center"><a href="edit.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id'] ?>"><button>düzenle</button></a></td>
            <td align="center"><a href="send.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id'] ?>&bilgilerimsil=ok"><button>sil</button></a></td>

        </tr>
        <?php } ?>
    </table>





    </form>
    
</body>
</html>