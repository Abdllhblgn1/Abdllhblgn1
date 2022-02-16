<?php 

include 'loginheader.php'; 

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['kullanici_mail']
  ));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
?>
<style>
   .header-area {
    background-color: black;


}
body{
  text-align: center;
}
/* Full-width input fields */
input[type=text], input[type=password], input[type=email], input[type=number],input[type=date]  {
  width: 60%;
  padding: 10px;
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
  width: 50%;
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
<br><br><br><br>
<?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">Updated...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">Updated Failed...</b>

              <?php }

              ?>

              <p>Edit Your Profile</p>
              <hr>
 <!-- ***** Fleet Starts ***** -->
   <form action="islem.php" method="POST" enctype="multipart/form-data">

   

      <label for="age"><b>Name</b></label><br>
    <input type="text"  name="kullanici_ad"  value="<?php echo $kullanicicek['kullanici_ad'] ?>"   id="ad" required ><hr>
    <label for="go-date"><b>Surname</b></label><br>
    <input type="text"  name="kullanici_soyad"  value="<?php echo $kullanicicek['kullanici_soyad'] ?>" id="soyad" required ><hr>
     <label for="country">Choose your country:</label>
  <select name="kullanici_ulke" id="country">
    <option value="<?php echo $kullanicicek['kullanici_ulke'] ?>" selected><?php echo $kullanicicek['kullanici_ulke'] ?></option>
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
   <option value="<?php echo $kullanicicek['kullanici_gidilecek_ulke'] ?>" selected><?php echo $kullanicicek['kullanici_gidilecek_ulke'] ?></option>
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

    
    
    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">
    <button name="editinfo" type="submit" class="registerbtn">Edit</button>
    </form>
  

<?php include 'footer.php'; ?>
