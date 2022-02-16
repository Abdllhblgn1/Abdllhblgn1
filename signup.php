<?php 
include 'header.php'; 
include 'baglan.php';
?>

<style>
 .header-area {
    background-color: black;
}


/* Full-width input fields */
input[type=text], input[type=password], input[type=email], input[type=number],input[type=date]  {
  width: 100%;
  padding: 12px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<br><br><br><br><br>
<body>

<form action="islem.php" method="POST">


  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>  
        <?php 

                if (@$_GET['durum']=="farklisifre") {?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
                </div>
                    
                <?php } elseif (@$_GET['durum']=="eksiksifre") {?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
                </div>
                    
                <?php } elseif (@$_GET['durum']=="mukerrerkayit") {?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
                </div>
                    
                <?php } elseif (@$_GET['durum']=="basarisiz") {?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
                </div>
                    
                <?php }
                 ?>
                 <hr> 

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="kullanici_ad" id="name" required>

    <label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="kullanici_soyad" id="surname" required>

    
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="kullanici_mail" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="kullanici_passwordone" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="kullanici_passwordtwo" id="psw-repeat" required>


    <label for="country">Choose your country:</label>
  <select name="kullanici_ulke" id="country">
    <option value="  " selected>Select a country</option>
    <option value="--">Not Specified</option>
    <option value="Austria">Austria</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option> 
    <option value="Bulgaria">Bulgaria</option>  
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>  
    <option value="Finland">Finland</option>
    <option value="France">France</option>  
    <option value="Germany">Germany</option> 
    <option value="Greece">Greece</option> 
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option> 
    <option value="Italy">Italy</option> 
    <option value="Luxembourg">Luxembourg</option> 
    <option value="Malta">Malta</option>  
    <option value="Netherlands">Netherlands</option>  
    <option value="Norway">Norway</option>   
    <option value="Romania">Romania</option>   
    <option value="Slovakia">Slovakia</option>   
    <option value="Slovenia">Slovenia</option>   
    <option value="Spain">Spain</option>   
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option> 
    <option value="Lithuania">Lithuania</option> 
    <option value="Estonia">Estonia</option> 
    <option value="Turkey">Turkey</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="Poland">Poland</option>
   
   
    
</select>
<hr>
  <label for="country">Where will you go?</label>
  <select name="kullanici_gidilecek_ulke" id="country">
   <option value="  " selected>Select a country</option>
    <option value="--">Not Specified</option>
    <option value="Austria">Austria</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option> 
    <option value="Bulgaria">Bulgaria</option>  
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>  
    <option value="Finland">Finland</option>
    <option value="France">France</option>  
    <option value="Germany">Germany</option> 
    <option value="Greece">Greece</option> 
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option> 
    <option value="Italy">Italy</option> 
    <option value="Luxembourg">Luxembourg</option> 
    <option value="Malta">Malta</option>  
    <option value="Netherlands">Netherlands</option>  
    <option value="Norway">Norway</option>   
    <option value="Romania">Romania</option>   
    <option value="Slovakia">Slovakia</option>   
    <option value="Slovenia">Slovenia</option>
    <option value="Spain">Spain</option>   
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option> 
    <option value="Lithuania">Lithuania</option> 
    <option value="Estonia">Estonia</option>
    <option value="Turkey">Turkey</option>
    <option value="United Kingdom">United Kingdom</option>
     <option value="Poland">Poland</option>

   
</select>


    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button name="kullanicikaydet" type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
  </div>
</form>

<?php 
include 'footer.php'; 
?>
