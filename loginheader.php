<?php 

ob_start();
session_start();

include 'baglan.php';


//Belirli veriyi seçme işlemi


$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['kullanici_mail']
  ));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if ($say==0) {

  Header("Location:signin.php?durum=izinsiz");
  exit;

}



?>

<!DOCTYPE html>
<html lang="en">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Erasmus informations and meeting app">
    <meta name="abstract" content="Go erasmus not alone">
    <meta name="keywords" content="erasmus, erasram, meeting, study, abroad, europe, university, students, friends">


    <meta name="author" content="Abdullah Bilgin">
    <meta name="content-language" content="en"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">

    <title>Explore the world with erasmus!</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

     <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">


    </head>
    <style >

  

     .modal{
        scroll-behavior: smooth;
    text-align: center;
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0, 0, 0, 4);
    -webkit-animation-name: fadeIn;
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4sn;
}
.modal-content{
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
}
.close{
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus{
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modal-header{
    padding: 2px 16px;
    background-color: #ed563b;
    color: white;
}

.modal-body{
    padding: 2px 16px;
}
.modal-footer {
    padding: 2px 16px;
    background-color: #ed563b;
    color: white;
  }
  /* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -400px; opacity: 0} 
    to {bottom: 0; opacity: 1}
  }
  
  @keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
  }
  
  @-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }
  
  @keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }

    
    </style>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="explorelogin.php" class="logo">Eras<em>ram</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">

                            <h5 style="color: #666699; padding-top:7px; text-transform: capitalize;"><em style="color:#ed563b;">Welcome</em> <?php echo $kullanicicek['kullanici_ad'] ?> <?php echo $kullanicicek['kullanici_soyad'] ?></h5>
                            
                            <li><a href="#" id="myBtn"><i class="fa fa-bars" aria-hidden="true"></i> Menu & About</a></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
