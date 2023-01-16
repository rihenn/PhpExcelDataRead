<?php
session_start();
require __DIR__.'/baglan.php';
 $kullanici = $_SESSION["ad"] ;


$sql = "SELECT * FROM  giris_cikis where ad_soyad = '$kullanici'";

$order = ['tarih', 'DESC'];


$users = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$response = [];

$response['data']=[];




foreach ($users as $user){
    $e = 1;
   

    $ad = $user['ad_soyad'];
    $firma = $user['firma']; 
    $girma_g_C = $user['firma_g_c'];
    $tarih =$user['tarih'];
    $date1 = str_replace('/', '-', $user['saat']);
    $saat = date("H:i:", strtotime($date1));
  
    $giriscikis =  $user['giris_cikis'];

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

             $gun_farki . ' gün ';
             $saat_farki . ' saat ';
             $dakika_farki . ' dakika ';
             $saniye_farki . ' saniye ';
            $e = 0;
        }
        $response['data'][] = [
            'ad_Soyad'=> $user['ad_soyad'],
            'firma'=> $user['firma'],
            'firma_g_c'=> $user['firma_g_c'],
            'tarih'=> $user['tarih'],
            'saat'=> $user['saat'],
            'giris_cikis'=> $user['giris_cikis'],
            "gun_farki"=> $gun_farki . ' gün ',

        ];
    }
}
echo json_encode($response);
?>