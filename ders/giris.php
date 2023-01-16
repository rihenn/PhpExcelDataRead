<?php

session_start();

$baglanti = new mysqli("localhost", "root", "", "giriscikis");
if ($baglanti->connect_errno > 0) {
  die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>giriş</title>
  <link data-n-head="ssr" rel="icon" type="image/png" size="32" data-hid="favicon-32" href="./img/icons8-monkey-32.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="./css/main.css">
  <style>
      .wrapper.fadeInDown{
    background-color:#222831;
  }
  body{
    background-color:#222831;
  }
 
  </style>
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="./img/icons8-monkey-50.png" id="icon" alt="User Icon" />
      </div>
      <?php
      if (isset($_POST['login'])) {

        $kullanici_ad = $_POST['login'];
        $sifre = $_POST['password'];
       

        $sql = $baglanti->query("SELECT * FROM kullaniciler where kullanıcı_ad='$kullanici_ad'");
        $cikti = $sql->fetch_array();
       
        if ($cikti['kullanıcı_ad'] == $kullanici_ad && $cikti['sifre'] ==$sifre) {
         $_SESSION["ad"] = $cikti["ad_soyad"];
         
          $_SESSION["kullanici"] = $kullanici_ad;
        
          header('location:/GIRISCIKIS/ders/datatables.php');
          // $_SESSION["isim"] = $ad_soyad;
        } else {
          echo '<div class="alert alert-danger">
          
          <strong>UYARI!</strong> Kullanıcı adı ve ya şifre hatalıdır.
        </div>';
        }
      }
      
      ?>
      <!-- Login Form -->
      <form action="<?php $deneme ?>" method="post">
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" class="fadeIn fourth butn" value="Log In" style=" background-color:#00ADB5;">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover text-primary" href="#" style="color:#00ADB5;">Forgot Password?</a>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>