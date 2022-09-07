<?php 
///////bu örnekteki cookie sayfa kapatıldığı anda silinir///////////

/*
$adsoyad = "örnek isim";

setcookie("name",$adsoyad);

echo $_COOKIE["name"];
*/

////////////////////////////////////////////////////////////////////
 


///////bu örnekteki cookie sayfa BELİRLENEN SÜREDEN SONRA silinir///////////
$adsoyad = "ahmet kaya";

setcookie("name",$adsoyad,strtotime("+1 days")); // başa virgül koyup "time())+3600" VEYA "strtotime("+1 days")" kodunu ekleyerek cookie olarak bilgisayarınızda ne süre kalacağını belirleyebilirsiniz (3600 1 saate denk gelir)
////////////////////////////////////////////////////////////////////

// NOT: eğer time())+3600 kodunu kullanırsanız datetime settings required hatası almanız muhtemel bunu çözmek için  date_default_timezone_set("Europe/Istanbul") kodunu kullanabilirsiniz

/*
strtotime örnekleri

strtotime("+1 secconds")
strtotime("+1 minutes")
strtotime("+1 days")
strtotime("+1 weeks")
strtotime("+1 months")
strtotime("+1 years")


*/
?>

