<?php 

include 'loginheader.php'; 

//Belirli veriyi seçme işlemi
$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_gidilecek_ulke='Czech Republic'");
$kullanicisor->execute();


?>
<style>
   .header-area {
    background-color: black;
}
</style>
<br><br><br>
 <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>


            
            
          

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                   <li><a href='#tabs-3'><i class="fa fa-plus-circle"></i> Who Going ?</a></li>
                  <li><a href='#tabs-1'><i class="fa fa-cog"></i> Package Specs</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-gift"></i> Package Description</a></li>  
                  <li><a href='#tabs-4'><i class="fa fa-map-marker"></i> Map</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%; text-align:center;">
                  <article id='tabs-1'>
                    <h4>Package Specs</h4>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Currency</label>
                       
                            <p>Czech Koruna</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Main Language</label>
                       
                            <p> Czech</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flight included</label>
                       
                            <p>Yes</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flag</label>
                       
                            <p><img src="assets/images/czechrepublicflag.png" alt="Czech Republic Flag" style="height:15%; width:40%; "></p>
                       </div>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Package Description</h4>
                    
                    <p>The Czech Republic (/ˈtʃɛk -/ (About this soundlisten);[13] Czech: Česká republika [ˈtʃɛskaː ˈrɛpublɪka] (About this soundlisten)),[14] also called by its short-form name, Czechia[15] (/ˈtʃɛkiə/ (About this soundlisten); Czech: Česko [ˈtʃɛsko] (About this soundlisten)), is a landlocked country in Central Europe. It is bordered by Austria to the south, Germany to the west, Poland to the northeast, and Slovakia to the east.[16] The Czech Republic has hilly landscape that covers an area of 78,866 square kilometers (30,450 sq mi) with a mostly temperate continental climate and oceanic climate. It is a unitary parliamentary republic. (Wikipedia)</p>
                   </article>
                   <article id='tabs-4'>
                    <h4>Map</h4>
                    
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d858039.059211363!2d15.061209740026069!3d49.404997995132604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470ce5fab51e9919%3A0xa0578fe486ed203f!2sCZECH%20REPUBLIC!5e0!3m2!1str!2str!4v1611835034290!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                   </article>

                  <article id='tabs-3'>
                    <h4>Who going Czech Republic with you ?</h4>




            <!-- Div İçerik Başlangıç -->

            <div class="table-responsive">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Age</th>
                  <th>From</th>
                  <th>Where</th>
                  <th>Erasmus University</th>
                  <th>Date</th>
                  <th>Contact on Social Media</th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {?>


                <tr>
                  <td><?php echo $kullanicicek['kullanici_ad'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_soyad'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_age'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_ulke'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_gidilecek_ulke'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_euniversity'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_zamann'] ?></td>

                  <td><a href="https://www.instagram.com/<?php echo $kullanicicek['kullanici_social']?>/" ><i class="fa fa-location-arrow" aria-hidden="true"></i></a></td>


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
<!-- /page content -->

<?php include 'footer.php'; ?>
