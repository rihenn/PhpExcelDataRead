<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
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
        <form method="post">

            <input type="date" id="birthday" name="birthday">
            <input type="submit">
        </form>
        <div class="row col-12">

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
                require 'tablo.php';
                ?>

                <div class="row m-2 " style="height: 50px;">
                    <?php
                    require "giris_cikis.php";

                    fo();
                    ?>
                </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                
            });


        });
    </script>

</body>

</html>