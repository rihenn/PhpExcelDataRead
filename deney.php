<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/datatables.min.js"></script>


    <title>Document</title>
</head>

<body>
    <div class="container ">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/GIRISCIKIS/deneme.php" class="nav-link">veri ekle</a></li>
            </ul>
        </header>
    </div>
    <div class="container">

        <div class="row col-9">

            <table id="example" class="display">
                <thead>
                    <tr>
                        <th>Ad Soyad</th>
                        <th>Firma</th>
                        <th>Cihaz</th>
                        <th>Tarih</th>
                        <th>Saat</th>
                        <th>Giris Çıkış</th>
                    </tr>
                </thead>
                <?php
                require 'baglan.php';

                echo "<tbody>";
                $sql = "SELECT ad_Soyad,firma,firma_g_c,tarih,saat,giris_cikis FROM giris_cikis ";
                $result = mysqli_query($baglanti, $sql);



                foreach ($result as $row) {
                    $ad = $row["ad_Soyad"];
                    $firma = $row["firma"];
                    $firma_g_C = $row["firma_g_c"];
                    $tarih = $row['tarih'];
                    $date1 = str_replace('/', '-', $row['saat']);
                    $saat = date("H:i:s", strtotime($date1));
                    $giriscikis = $row['giris_cikis'];
                    echo "<tr>";
                    
                        echo "<td>" . $ad . "</td>";
                        echo "<td>" . $firma . "</td>";
                        echo "<td>" . $firma_g_C . "</td>";
                        echo "<td>" . $tarih . "</td>";
                        echo "<td>" . $saat . "</td>";
                        echo "<td>" . $giriscikis . "</td>";
                    
                    echo "</tr>";
                }

                echo "</tbody></table>";

                ?>

                <div class="row m-2 col-2" style="height: 50px;">
                    <?php
                    require "giris_cikis.php";

                    fo();
                    ?>
                </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>