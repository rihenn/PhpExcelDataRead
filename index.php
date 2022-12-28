<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/date-1.2.0/sb-1.4.0/sp-2.1.0/datatables.min.css"/>

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

            <table id="table" style="border:1px" cellpadding="6">
                <?php
                require 'tablo.php';
                ?>

                <div class="row col-2" style="height: 50px;">
                    <?php
                    require "giris_cikis.php";

                    fo();
                    ?>
                </div>
        </div>
    </div>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/date-1.2.0/sb-1.4.0/sp-2.1.0/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
 $(document).ready(function () {
    $('#table').DataTable();
});
</script>
</body>

</html>