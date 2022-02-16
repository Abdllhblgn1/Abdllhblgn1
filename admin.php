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

  Header("Location:admingiris.php");
  exit;

}



$kullanicisor=$db->prepare("SELECT * FROM kullanici ");
$kullanicisor->execute();


$messagesor=$db->prepare("SELECT * FROM roomtrr  ");
$messagesor->execute();
$messagecek=$messagesor->fetch(PDO::FETCH_ASSOC);


 if ($kullanicicek['kullanici_yetki']==5) {
     Header("Location:admingiris.php");
  } 
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Admin Panel</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <style>
   .header-area {
    background-color: black;
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
                        <a href="admin.php" class="logo">Admin<em> Panel</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                   
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
<br><br>
<!-- ***** Fleet Starts ***** -->


    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>


            
            
          

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                   <li><a href='#tabs-3'><i class="fa fa-users"></i> Members</a></li>
                  
                  <li><a href='#tabs-4'><i class="fa fa-comments"></i>Messages</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-plus"></i>Extras</a></li>  
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%; text-align:center;">
                
                  <article id='tabs-2'>
                    <h4>Package Description</h4>
                    
                    <p>The Turkey Republic of Turkey or official name, the majority of land in Anatolia, while a small part of the Balkan Peninsula in southeastern files countries located in Thrace. It neighbors Bulgaria in the northwest, Greece in the west, Georgia in the northeast, Armenia, Iran, and Azerbaijan in the east, Nakhichevan, and Iraq and Syria in the southeast. The Mediterranean Sea surrounds the south, the Aegean Sea to the west, and the Black Sea to the north. The Marmara Sea, on the other hand, separates Anatolia from Thrace and Asia from Europe together with the Bosphorus and the Dardanelles. Turkey, due to take place at the crossroads of Europe and Asia has an important geostrategic power. (Wikipedia)</p>
                   </article>
                   <article id='tabs-4'>
                    <h4>Map</h4>
                    
                    <table>       
                    <div class="table-responsive">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Text</th>
                  <th>Date</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php 



                while($messagecek=$messagesor->fetch(PDO::FETCH_ASSOC)) {?>

                  <tr>
                     <td><?php echo $messagecek['message_id'] ?></td>
                    <td><?php echo $messagecek['message_ad'] ?></td>
                    <td><?php echo $messagecek['message_text'] ?></td>
                    <td><?php echo $messagecek['message_time'] ?></td>
                    <td><center><a href="islem.php?message_id=<?php echo $messagecek['message_id']; ?>&messagesil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>

                </tr>

                <?php  }

                ?>

              </tbody></table>
                   </article>

                  <article id='tabs-3'>
                    <h4>Who going Turkey with you ?</h4>




            <!-- Div İçerik Başlangıç -->
            <p style="textalign:center;">
    <?php 

             if (@$_GET['sil']=="ok") {
             
          ?>   <p style="color:red; text-align: center; "> User Deleted </p> <?php

             } ;
             ?>
  </p>
<p style="textalign:center;">
    <?php 

             if (@$_GET['sil']=="no") {
             
          ?>   <p style="color:red; text-align: center; "> Can not deleted </p> <?php

             } ;
             ?>
  </p>

            <p style="textalign:center;">
    <?php 

             if (@$_GET['messagesil']=="ok") {
             
          ?>   <p style="color:red; text-align: center; "> Message Deleted </p> <?php

             } ;
             ?>
  </p>
<p style="textalign:center;">
    <?php 

             if (@$_GET['messagesil']=="no") {
             
          ?>   <p style="color:red; text-align: center; ">  Message Can not deleted </p> <?php

             } ;
             ?>
  </p>
            <div class="table-responsive">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
              <thead>
                <tr>
                   <th>Id</th>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Age</th>
                  <th>From</th>
                  <th>Where</th>
                  <th>Erasmus University</th>
                  <th>Date</th>
                  <th>Contact on Social Media</th>
                  <th>Delete</th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {?>


                <tr>
                  <td><?php echo $kullanicicek['kullanici_id'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_ad'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_soyad'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_age'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_ulke'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_gidilecek_ulke'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_euniversity'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_zamann'] ?></td>
                  <td><a href="https://www.instagram.com/<?php echo $kullanicicek['kullanici_social']?>/" ><i class="fa fa-location-arrow" aria-hidden="true"></i></a></td>
                  <td><center><a href="islem.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>&kullanicisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>



                </tr>



                <?php  }

                ?>


              </tbody>
            </table>
             </div>

             
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
<br><br><center>
<a href="explorelogin.php">Bact to site</a>
<!-- /page content -->
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                       Admin Panel-2021
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>