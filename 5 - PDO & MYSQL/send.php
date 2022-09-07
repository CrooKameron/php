<?php 
require_once 'connect.php';

if (isset($_POST['insertprocsess'])) {
    $kaydet=$db->prepare("INSERT into bilgilerim set
        bilgilerim_ad=:bilgilerim_ad,
        bilgilerim_soyad=:bilgilerim_soyad,
        bilgilerim_mail=:bilgilerim_mail,
        bilgilerim_yas=:bilgilerim_yas
    ");

    $insert=$kaydet->execute(array(
            'bilgilerim_ad' => $_POST['bilgilerim_ad'],
            'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
            'bilgilerim_mail' => $_POST['bilgilerim_mail'],
            'bilgilerim_yas' => $_POST['bilgilerim_yas']
    ));

    if ($insert) { //burada verinin veritabanına kaydedilip kaydedilmediğini sorguluyoruz
        //echo"kayıt başarılı";
        header("Location:veri ekleme sayfasi.php?durum=true"); //sormadan başka bir adrese yönlendirme yapar
        exit;
    }
    else {
        header("Location:error_pages/404_page.html?durum=false"); // ?durum=false  komutu işlemin başarılı olup olmadığını takip etmemize yarıyor
        exit;
    }
}






if (isset($_POST['updateislemi'])) {
    $bilgilerim_id=$_POST['bilgilerim_id'];
    $kaydet=$db->prepare("UPDATE bilgilerim set
        bilgilerim_ad=:bilgilerim_ad,
        bilgilerim_soyad=:bilgilerim_soyad,
        bilgilerim_mail=:bilgilerim_mail,
        bilgilerim_yas=:bilgilerim_yas
        WHERE bilgilerim_id={$_POST['bilgilerim_id']}
    ");

    $insert=$kaydet->execute(array(
            'bilgilerim_ad' => $_POST['bilgilerim_ad'],
            'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
            'bilgilerim_mail' => $_POST['bilgilerim_mail'],
            'bilgilerim_yas' => $_POST['bilgilerim_yas']
    ));

    if ($insert) { 
        header("Location:edit.php?durum=true&bilgilerim_id=$bilgilerim_id"); 
        exit;
    }
    else {
        header("Location:error_pages/404_page.html?durum=false"); 
        exit;
    }

}
if ($_GET['bilgilerimsil']=="ok") 
{
    $sil=$db->prepare("DELETE from bilgilerim where bilgilerim_id=:id");
    $kontrol=$sil->execute(array('id' => $_GET['bilgilerim_id']));
}

if ($kontrol) { 
    header("Location:UPDATE ile Veri Düzenleme İslemi.php?durum=true"); 
    exit;
}
else {
    header("Location:error_pages/404_page.html?durum=false"); 
    exit;
}


?>