<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=giriscikis;charset=utf8", "root", "");
} catch (PDOException $hata) {
    echo "HATA : Bağlanamadı";
}

$users = $db->query('SELECT * FROM giris_cikis')->fetchAll(PDO::FETCH_ASSOC);
?>