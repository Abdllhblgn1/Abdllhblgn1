  <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2021 Erasram
                        - Developed by: <a href="https://www.linkedin.com/in/abdullah-bilgin-2196a417b/" >AB</a>

                        - <a href="#"> Follow Us On <i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </p>
                </div>
                
            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <h2>Menu <i class="fa fa-bars" aria-hidden="true"  "></i></h2>
                    <span class="close">&times;</span>

                </div>
                <div class="modal-body">
                    <form action="../erasram/islem.php" method="POST">

                         <li><a href="addinfo.php"><i class="fa fa-plus" aria-hidden="true" style="color:black; ">  Fill Profile </i></a></li> 
                          <li ><a href="editprofile.php"><i class="fa fa-pencil"  aria-hidden="true" style="color:black;" > Edit Profile </i></a></li>
                           <li><a href="updatepassword.php"><i class="fa fa-key" aria-hidden="true" style="color:black;"> Update Password </i></a></li> 

                          <hr>
                          <h3>About Us</h3>
                         <p>Erasram is a web platform designed for students who want to participate in the Erasmus program abroad to find each other in order to socialize and not be alone. We are the developers of Erasram. <br>

                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                         </p>
           </div>
                <div class="modal-footer">
                    <h2>ERASRAM</h2>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal için js-->
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>

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