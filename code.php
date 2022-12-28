<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;




    require 'baglan.php';
    $e = 0;
    if (isset($_POST['save_excel_data'])) {
        $fileName = $_FILES['import_file']['name'];
        $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowed_ext = ['xls', 'csv', 'xlsx'];

        if (in_array($file_ext, $allowed_ext)) {
            $inputFileName = $_FILES['import_file']['tmp_name'];
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
            $data = $spreadsheet->getActiveSheet()->toArray();
            $sql = "DELETE FROM `giris_cikis`";
            $result = mysqli_query($baglanti, $sql);
            foreach ($data as $row) {

                $ad = $row['0'];
                $firma = $row['1'];
                $firma_g_c = $row['3'];
                $date = str_replace('/', '-', $row['4']);
                $tarih = date("Y-m-d", strtotime($date));
                $date1 = str_replace('/', '-', $row['5']);
                $saat = date("H:i:s", strtotime($date1));
                $giriscikis = $row['6'];
                if ($ad==!null && $e>0) {
                    $Query = "INSERT INTO giris_cikis(ad_soyad,firma,firma_g_c,tarih,saat,giris_cikis)VALUE('$ad','$firma','$firma_g_c','$tarih','$saat','$giriscikis')";
                $result = mysqli_query($baglanti, $Query);
                }
            $e++;
                $msg = true;





                
            }
        }
        echo "in";
    }
    

