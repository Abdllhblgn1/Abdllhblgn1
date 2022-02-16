<?php 
include 'loginheader.php'

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

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/images/package-image-1-1200x600.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/package-image-1-1200x600.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/package-image-1-1200x600.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            <br>
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-cog"></i> Package Specs</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-gift"></i> Package Description</a></li>
                  <li><a href='#tabs-3'><i class="fa fa-plus-circle"></i> Availability &amp; Prices</a></li>
                  <li><a href='#tabs-4'><i class="fa fa-info-circle"></i> Package Info</a></li>
                  <li><a href='#tabs-5'><i class="fa fa-map-marker"></i> Map</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                  <article id='tabs-1'>
                    <h4>Package Specs</h4>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Available</label>
                       
                            <p>Spring</p>
                       </div>

                       <div class="col-sm-6">
                            <label>For</label>
                       
                            <p> 20 nights</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flight included</label>
                       
                            <p>Yes</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Address</label>
                       
                            <p>6 Regeneration Road, SE16 2NX, London</p>
                       </div>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Package Description</h4>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia doloremque sit, enim sint odio corporis illum perferendis, unde repellendus aut dolore doloribus minima qui ullam vel possimus magnam ipsa deleniti.</p> 
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ducimus ab numquam magnam aliquid, odit provident consectetur corporis eius blanditiis alias nulla commodi qui voluptatibus laudantium quaerat tempore possimus esse nam sed accusantium inventore? Sapiente minima dicta sed quia sunt?</p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum qui, corrupti consequuntur. Officia consectetur error amet debitis esse minus quasi, dicta suscipit tempora, natus, vitae voluptatem quae libero. Sunt nulla culpa impedit! Aliquid cupiditate, impedit reiciendis dolores, illo adipisci, omnis dolor distinctio voluptas expedita maxime officiis maiores cumque sequi quaerat culpa blanditiis. Quia tenetur distinctio rem, quibusdam officiis voluptatum neque!</p>
                   </article>
                  <article id='tabs-3'>
                    <h4>Availability &amp; Prices</h4>

                    <div class="table-responsive">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
                         <thead>
                              <tr>
                                   <th>Package</th>
                                   <th>From</th>
                                   <th>To</th>
                                   <th>Price</th>
                              </tr>
                         </thead>
                         
                         <tbody>
                              <tr>
                                   <td></td>
                                   <td>01-06-2020</td>
                                   <td>31-12-2020</td>
                                   <td>€ 300 per night</td>
                              </tr>

                              <tr>
                                   <td></td>
                                   <td>01-06-2020</td>
                                   <td>31-12-2020</td>
                                   <td>€ 300 per night</td>
                              </tr>

                              <tr>
                                   <td></td>
                                   <td>01-06-2020</td>
                                   <td>31-12-2020</td>
                                   <td>€ 300 per night</td>
                              </tr>
                              <tr>
                                   <td></td>
                                   <td>01-06-2020</td>
                                   <td>31-12-2020</td>
                                   <td>€ 4000 total price</td>
                              </tr>
                         </tbody>
                      </table>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <h4>Package Info</h4>

                    <ul class="list-group list-group-no-border">
                      <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                              <div class="col-md-2 col-sm-3">
                                   <p class="pjVpProductPolicyTitle">
                                        <strong>Check-in</strong>
                                   </p>
                              </div>
                              <div class="col-md-10 col-sm-9">
                                   <p>
                                        Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                                   </p>
                              </div>
                         </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Check-out</strong>
                                     </p>
                                </div>

                                <div class="col-md-10 col-sm-9">
                                     <p>
                                          Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                                     </p>
                                </div>
                           </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Pets</strong>
                                     </p>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                     <p>
                                          Not allowed
                                     </p>
                                </div>
                           </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Policies</strong>
                                     </p>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                     <div>
                                          <p>
                                               Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                          </p>
                                     </div>
                                </div>
                           </div>
                      </li>
                      
                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Fees</strong>
                                     </p>
                                </div>

                                <div class="col-md-10 col-sm-9">
                                     <div>
                                          <p>
                                               Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                          </p>
                                     </div>
                                </div>
                           </div>
                      </li>
                    </ul>
                  </article>
                  <article id='tabs-5'>
                    <h4>Map</h4>

                    <img src="assets/images/map.jpg" class="img-fluid" alt="">
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
    
    <?php 
    include 'footer.php'


    ?>