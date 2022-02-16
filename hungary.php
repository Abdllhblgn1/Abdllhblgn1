<?php 

include 'loginheader.php'; 

//Belirli veriyi seçme işlemi
$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_gidilecek_ulke='Hungary'");
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
                       
                            <p>Hungarian Forint</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Main Language</label>
                       
                            <p> Hungarian</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flight included</label>
                       
                            <p>Yes</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flag</label>
                       
                            <p><img src="assets/images/hungaryflag.png" alt="Hungary Flag" style="height:15%; width:40%; "></p>
                       </div>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Package Description</h4>
                    
                    <p>Hungary (Hungarian: Magyarország [ˈmɒɟɒrorsaːɡ] (About this soundlisten)) is a country in Central Europe.[2] Spanning 93,030 square kilometres (35,920 sq mi) in the Carpathian Basin, it borders Slovakia to the north, Ukraine to the northeast, Romania to the east and southeast, Serbia to the south, Croatia and Slovenia to the southwest, and Austria to the west.[13] With about 10 million inhabitants, Hungary is a medium-sized member state of the European Union.[14] The official language is Hungarian, which is the most widely spoken Uralic language in the world, and among the few non-Indo-European languages to be widely spoken in Europe.[15] Hungary's capital and largest city is Budapest; other major urban areas include Debrecen, Szeged, Miskolc, Pécs, and Győr. (Wikipedia)</p>
                   </article>
                   <article id='tabs-4'>
                    <h4>Map</h4>
                    
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1389112.4761196363!2d18.383977756104716!3d47.15569403274189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741837bdf37e4c3%3A0xc4290c1e1010!2sMacaristan!5e0!3m2!1str!2str!4v1611835294241!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                   </article>

                  <article id='tabs-3'>
                    <h4>Who going Hungary with you ?</h4>




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
