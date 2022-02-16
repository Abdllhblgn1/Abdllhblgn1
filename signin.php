<?php 
include 'header.php';
include 'baglan.php'; 
?>

<style>
 .header-area {
    background-color: black;
}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
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
.signinbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.signinbtn:hover {
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
    <h1>Sign in</h1>
    <p>Please fill email and password for sign in</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="kullanici_mail" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="kullanici_password" id="psw" required>


    <button type="submit" name="usergiris" class="signinbtn">Sign In</button>
  </div> 
  <br>

  <p style="textalign:center;">
    <?php 

             if (@$_GET['durum']=="no") {
             
          ?>   <p style="color:red; text-align: center; "> "Kullanıcı Bulunamadı..."; </p> <?php

             } ;
             ?>
  </p>


  <p style="textalign:center;">
    <?php 

             if (@$_GET['durum']=="loginbasarili") {
             
          ?>   <p style="color:green; text-align: center; "> Kayıt Başarılı Lütfen Giriş Yapınız </p> <?php

             } ;
             ?>
  </p>
<br>
<div class="container signin">
    <p>Forget Password <a href="#">click here</a>.</p>
  </div>
  
<hr>
  <div class="container signin">
    <p>Or register <a href="signup.php">Sign up</a>.</p>
  </div>
</form>

<?php 
include 'footer.php'; 
?>
