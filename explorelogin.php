<?php 
include 'loginheader.php'

?>
<style>
   .header-area {
    background-color: black;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #ed563b;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: black;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<br><br><br><br><br>


<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text"  name="search2" value=" <?php echo $kullanicicek['kullanici_gidilecek_ulke'] ?>">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>





    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/turkey.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a sesion 300.00 <sup>£</sup> - 400.00 <sup>$</sup>
                            </span>

                            <h4>TURKEY</h4>

                            <p>
                                <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/turkey/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                                <i class="fa fa-comments"></i> <a href="roomtr.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                               
                            </p>

                            <ul class="social-icons">
                                <li><a href="turkey.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/germany2.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month 300.00 <sup>£</sup> - 400.00 <sup>$</sup>
                            </span>

                            <h4>GERMANY</h4>

                            <p>
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/germany/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                                <i class="fa fa-comments"></i> <a href="roomgm.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="germany.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/belgium.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>BELGIUM</h4>

                            <p>
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/belgium/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                                <i class="fa fa-comments"></i> <a href="roombg.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>
                            <ul class="social-icons">
                                <li><a href="belgium.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/italy1.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                               A budget for a month  <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>ITALY</h4>

                           
                            <p>
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/italy/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                                <i class="fa fa-comments"></i> <a href="roomit.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>
                            <ul class="social-icons">
                                <li><a href="italy.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/greece.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>GREECE</h4>
 
                            <p>
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/greece/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                                <i class="fa fa-comments"></i> <a href="roomge.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="greece.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-6-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>DENMARK</h4>

                            <p>
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/denmark/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                                <i class="fa fa-comments"></i> <a href="roomdn.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>


                            <ul class="social-icons">
                                <li><a href="denmark.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/finland1.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month 300.00 <sup>£</sup> - 400.00 <sup>$</sup>
                            </span>

                            <h4>FINLAND</h4>
                             <p>

                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/finland/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomfn.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="finland.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/netherlands.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month 300.00 <sup>£</sup> - 400.00 <sup>$</sup>
                            </span>

                            <h4>NETHERLANDS</h4>

                             <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/netherlands/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomne.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="netherlands.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/paris.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                 A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>FRANCE</h4>

                            <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/france/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomfr.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="france.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/estonia.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                               A budget for a month  <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>ESTONIA</h4>

                             <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/estonia/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomes.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>
                            <ul class="social-icons">
                                <li><a href="estonia.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/litvanya1.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                               A budget for a month  <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>LITHUANIA</h4>

                            <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/lithuania/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomli.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="lithuania.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/luksemburg.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                               A budget for a month  <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>LUXEMBOURG</h4>

                           <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/luxembourg/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomlx.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>


                            <ul class="social-icons">
                                <li><a href="luxembourg.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/malta.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month 300.00 <sup>£</sup> - 400.00 <sup>$</sup>
                            </span>

                            <h4>MALTA</h4>
                            <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/malta/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roommt.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="malta.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/makedonya.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                 A budget for a month 300.00 <sup>£</sup> - 400.00 <sup>$</sup>
                            </span>

                            <h4>MACEDONIA</h4>

                             <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/North-Macedonia/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomma.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>
                            <ul class="social-icons">
                                <li><a href="macedonia.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/austria.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>AUSTRIA</h4>
 <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/austria/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomau.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="austria.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/poland.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>POLAND</h4>

                            <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/poland/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roompl.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>
                            <ul class="social-icons">
                                <li><a href="poland.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/romania.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>ROMANIA</h4>

                           <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/romania/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomrm.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>
                            <ul class="social-icons">
                                <li><a href="romania.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/isvec.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>SWEDEN</h4>

                          
                           <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/sweden/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomsw.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="sweden.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/swiss.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>£</sup> - 400.00 <sup>$</sup>
                            </span>

                            <h4>SWITZERLAND</h4>
 <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/Switzerland/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomsd.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="swiss.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/slovakya.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month 300.00 <sup>£</sup> - 400.00 <sup>$</sup>
                            </span>

                            <h4>SLOVAKIA</h4>
 <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/Slovakia/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomsk.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="slovakia.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/slovenya.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>SLOVENIA</h4>
                             <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/Slovenia/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomsv.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="slovenia.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/spain.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>SPAIN</h4>

                                                         <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/spain/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomsp.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="spain.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/prag.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>CZECH REPUBLİC</h4>

                             <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/s/Czech-Republic/homes?adults=1&place_id=ChIJQ4Ld14-UC0cRb1jb03UcZvg&refinement_paths%5B%5D=%2Fhomes">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomzp.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>


                            <ul class="social-icons">
                                <li><a href="rzechrepublic.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/hungary.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>HUNGARY</h4>

                               <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/hungary/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomhr.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>
                            <ul class="social-icons">
                                <li><a href="hungary.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/iceland1.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>ICELAND</h4>

                                 <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/iceland/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomic.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="iceland.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/norway.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>NORWAY</h4>

                                     <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/norway/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomnw.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>
                            <ul class="social-icons">
                                <li><a href="norway.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/kibris.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                A budget for a month <sup>$</sup>300.00 - <sup>$</sup>400.00
                            </span>

                            <h4>CYPRUS</h4>

                                     <p>
                                
                             <i class="fa fa-bed" aria-hidden="true"></i> <a href="https://www.airbnb.com/cyprus/stays">Accommodation</a> &nbsp;&nbsp;&nbsp;

                             <i class="fa fa-comments"></i> <a href="roomcp.php">Chat Room</a> &nbsp;&nbsp;&nbsp;

                            </p>

                            <ul class="social-icons">
                                <li><a href="cyprus.php">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

<?php 
include 'footer.php'; 
?>