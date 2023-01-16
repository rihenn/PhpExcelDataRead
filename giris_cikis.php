<?php

function fo()
{
    $e = 1;
    require 'baglan.php';
$sql = "SELECT ad_Soyad,firma,firma_g_c,tarih,saat,giris_cikis FROM giris_cikis ";
$result = $baglanti->query($sql);
while ($row = $result->fetch_assoc()) {

    $ad = $row["ad_Soyad"];
    $firma = $row["firma"]; 
    $girma_g_C = $row["firma_g_c"];
    $tarih = $row['tarih'];
    $date1 = str_replace('/', '-', $row['saat']);
    $saat = date("H:i:", strtotime($date1));
  
    $giriscikis = $row['giris_cikis'];




    for ($i = 0; $i < 25; $i++) {

        if ($giriscikis === "Giriş") {
            $baslangic = strtotime($tarih . strtotime($saat));

            
        } else {
            $bitis = strtotime($tarih . strtotime($saat));
        

        }

        $fark = ($baslangic - isset($bitis)) / 86400;
        
        $dakika = $fark / 60;

        $saniye_farki = floor($fark - (floor($dakika) * 60));

        $saat = $dakika / 60;
        $dakika_farki = floor($dakika - (floor($saat) * 60));

        $gun = $saat / 24;
        $saat_farki = floor($saat - (floor($gun) * 24));

        $yil = floor($gun / 365);
        $gun_farki = floor($gun - (floor($yil) * 365));
        if ($e == 1) {

            print_r($gun_farki . ' gün ');
            echo $saat_farki . ' saat ';
            echo $dakika_farki . ' dakika ';
            echo $saniye_farki . ' saniye ';
            $e = 0;
        }
    }
}
}
?>