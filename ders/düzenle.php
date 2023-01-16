<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>düzenle</title>
    <link data-n-head="ssr" rel="icon" type="image/png" size="32" data-hid="favicon-32" href="./img/icons8-monkey-32.png">
    <link rel="stylesheet" href="./css/düzenle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body {
            background-color: #393E46;
        }

        .card {
            background-color: EEEEEE;
            box-shadow: 20px 20px 8px 0px rgba(43, 46, 50, 1);
            transition: 0.5s;

        }

        #submit {
            background-color: #393E46;
            color: white;
        }
        #submit1{
            background-color:#00ADB5;
            color: white;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="d-flex align-items-center mt-5">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="./img/gamer.png" alt="Maxwell Admin">
                                    </div>
                                    <h5 class="user-name">Yusuf Can Yüce</h5>
                                    <h6 class="user-email">yusufcan57yce@gmail.com</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Profil Düzenle</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Ad Soyad</label>
                                        <input type="text" class="form-control" id="fullName" placeholder="Ad Soyad Giriniz">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control" id="eMail" placeholder="Email Giriniz">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Tel no</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Telefon Numarası Giriniz">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">Görev</label>
                                        <input type="url" class="form-control" id="website" placeholder="Göreb Giriniz">
                                    </div>
                                </div>
                            </div>

                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <a id="submit" name="submit" class="btn" href="profil.php">Geri Dön</a>
                                        <a id="submit1" name="submit" class="btn" href="profil.php">Kaydet</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>