<?php
try {
    $baglanti = new mysqli("localhost", "root", "", "giriscikis");
} catch (PDOException $hata){
echo "HATA : Bağlanamadı";
}
?>