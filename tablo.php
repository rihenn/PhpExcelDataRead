<?php
require "baglan.php";

require 'vendor/autoload.php';

require 'baglan.php';

echo "<thead><tr>";
echo "<th>Ad Soyad</th>";
echo "<th>Firma</th>";
echo "<th>Cihaz</th>";
echo "<th>Tarih</th>";
echo "<th>Saat</th>";
echo "<th>Giris Çıkış</th>";
echo "</tr></thead>";

echo "<tbody>";
$sql = "SELECT ad_Soyad,firma,firma_g_c,tarih,saat,giris_cikis FROM giris_cikis ";
$result = mysqli_query($baglanti, $sql);


   
    foreach($result as $row){
        $ad = $row["ad_Soyad"];
        $firma = $row["firma"];
        $firma_g_C = $row["firma_g_c"];
        $tarih = $row['tarih'];
        $date1 = str_replace('/', '-', $row['saat']);
        $saat = date("H:i:s", strtotime($date1));
        $giriscikis = $row['giris_cikis'];
        echo "<tr>";
        if ($ad=='ABDULLAH GÜNGÖR') {
            echo "<td>".$ad."</td>";
            echo "<td>".$firma."</td>";
            echo "<td>".$firma_g_C."</td>";
            echo "<td>".$tarih."</td>";
            echo "<td>".$saat."</td>";
            echo "<td>".$giriscikis."</td>";
        }
        
    
echo "</tr>";
    }
    

echo "</tbody></table>";

?>