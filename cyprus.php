<?php 

include 'loginheader.php'; 

//Belirli veriyi seçme işlemi
$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_gidilecek_ulke='Cyprus'");
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
                       
                            <p> Turkish & Greek</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flight included</label>
                       
                            <p>Yes</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flag</label>
                       
                            <p><img src="assets/images/cyprusflag.png" alt="Cyprus Flag" style="height:15%; width:40%; "></p>
                       </div>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Package Description</h4>
                    
                    <p>Cyprus[f] (/ˈsaɪprəs/ (About this soundlisten)), officially called the Republic of Cyprus,[g] is an island nation in the eastern Mediterranean Sea. It is the third largest[12] and third most populous[13] island in the Mediterranean, and is located north of Egypt; northwest of Lebanon, Palestine, and Israel; west of Syria; southeast of Greece; and south of Turkey.

The earliest known human activity on the island dates to around the 10th millennium BC. Archaeological remains from this period include the well-preserved Neolithic village of Khirokitia, and Cyprus is home to some of the oldest water wells in the world.[14] Cyprus was settled by Mycenaean Greeks in two waves in the 2nd millennium BC. As a strategic location in the Eastern Mediterranean, it was subsequently occupied by several major powers, including the empires of the Assyrians, Egyptians and Persians, from whom the island was seized in 333 BC by Alexander the Great. Subsequent rule by Ptolemaic Egypt, the Classical and Eastern Roman Empire, Arab caliphates for a short period, the French Lusignan dynasty and the Venetians, was followed by over three centuries of Ottoman rule between 1571 and 1878 (de jure until 1914).[15]

 (Wikipedia)</p>
                   </article>
                   <article id='tabs-4'>
                    <h4>Map</h4>
                    
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d834960.2135366291!2d32.8647811175735!3d35.167509508932284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de1767ca494d55%3A0x324c3c807fc4146e!2zS8SxYnLEsXM!5e0!3m2!1str!2str!4v1611836513645!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                   </article>

                  <article id='tabs-3'>
                    <h4>Who going Cyprus with you ?</h4>




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
