<?php 

include 'loginheader.php'; 

//Belirli veriyi seçme işlemi
$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_gidilecek_ulke='Estonia'");
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
                       
                            <p>€</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Main Language</label>
                       
                            <p> Estonian</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flight included</label>
                       
                            <p>Yes</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flag</label>
                       
                            <p><img src="assets/images/estoniaflag.png" alt="Estonia Flag" style="height:15%; width:40%; "></p>
                       </div>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Package Description</h4>
                    
                    <p>Estonia, officially the Republic of Estonia (Estonian: Eesti Vabariik), is a country on the eastern coast of the Baltic Sea in Northern Europe. It is bordered to the north by the Gulf of Finland across from Finland, to the west by the Baltic Sea across from Sweden, to the south by Latvia, and to the east by Lake Peipus and Russia. The territory of Estonia consists of the mainland and of 2,222 islands in the Baltic Sea,[14] covering a total area of 45,227 km2 (17,462 sq mi), and is influenced by a humid continental climate. Tallinn, the capital of Estonia, and Tartu are the largest cities and urban areas in the country. Other notable cities include Narva, Pärnu, Kohtla-Järve and Viljandi. The official language of the country, Estonian, is the second-most-spoken Finnic language.(Wikipedia)</p>
                   </article>
                   <article id='tabs-4'>
                    <h4>Map</h4>
                    
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1063838.9211312856!2d23.811302892654275!3d58.61553407196912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4692949c82a04bfd%3A0x40ea9fba4fb425c3!2sEstonya!5e0!3m2!1str!2str!4v1611750250734!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                   </article>

                  <article id='tabs-3'>
                    <h4>Who going Estonia with you ?</h4>




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
                  <th>Contact on Instagram</th>
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
