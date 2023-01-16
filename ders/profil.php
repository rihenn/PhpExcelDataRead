<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
    <link data-n-head="ssr" rel="icon" type="image/png" size="32" data-hid="favicon-32" href="./img/icons8-monkey-32.png">
    <link rel="stylesheet" href="./css/profil.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <style>
        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 12px 12px 8px 0px rgba(43, 46, 50, 1);
            transition: 0.5s;
        }

        #box {

            border-radius: 4%;

        }

        #cardImg {
            border-radius: 6% 6% 0px 0px;

        }

        body {
            background-color: #393E46;
        }

        #btn {
            background-color: #00ADB5;

            border: 1px solid #B2B2B2;
            font-size: 18px;
            font-family: "Gill Sans", sans-serif;
        }

        .card {
            background-color: #EEEEEE;
        }
    </style>



</head>

<body>

    <div class="d-flex justify-content-center m-t-20 col">
        <div class="d-flex" style="display: inline-block !important;">
            <a href="datatables.php"> <img src="./img/icons8-left-50.png" alt=""></a>

        </div>
        <div class="card col-7" id="box" >

            <img id="cardImg" class="card-img-top rounded-pill" src="./img/photo-1497366754035-f200968a6e72.png" alt="Card image cap">
            <div class="card-body little-profile text-center">
                <div class="pro-img"><img src="./img/gamer.png" alt="user"></div>
                <h3 class="m-b-0">Yusuf Can Yüce</h3>
                <p>Web Designer &amp; stajyer</p> <a id="btn" href="düzenle.php" class="m-t-10 waves-effect waves-dark btn text-light btn-md btn-rounded" data-abc="true">Düzenle</a>
                <div class="row text-center m-t-20">
                    <div class="col-lg-4 col-md-4 m-t-20" style="right:10px">
                        <h3 class="m-b-0 font-light">Yusuf Can Yüce</h3><small>ad soyad</small>
                    </div>
                    <div class="col-lg-5 col-md-5 m-t-20">
                        <h3 class="m-b-0 font-light">yusufcan57yce@gmail.com</h3><small>email</small>
                    </div>
                    <div class="col-lg-3 col-md-3 m-t-20">
                        <h4 class="m-b-0 font-light" style="color:#222831;">+905348455642</h4><small>tel</small>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>