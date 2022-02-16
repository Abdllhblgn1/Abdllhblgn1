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

              <p>Fill Your Profile</p>
              <hr>
 <!-- ***** Fleet Starts ***** -->
   <form action="islem.php" method="POST" enctype="multipart/form-data">

   

      <label for="age"><b>Age</b></label><br>
    <input type="number"  name="kullanici_age"  value="<?php echo $kullanicicek['kullanici_age'] ?>"   id="age"  ><hr>
    <label for="go-date"><b>Your Instagram User Name</b></label><br>
    <input type="text"  name="kullanici_social"  value="<?php echo $kullanicicek['kullanici_social'] ?>" id="go-date" ><hr>
    <label for="euniversity"><b>Erasmus University</b></label><br>
    <input type="text"  name="kullanici_euniversity" value="<?php echo $kullanicicek['kullanici_euniversity'] ?>" id="euniversity" ><hr>
    <label for="go-date"><b>When will you go ? <em style="color:gray;" >(yyyy.mm.dd)</em></b></label><br>
    <input type="date"  name="kullanici_zamann"  value="<?php echo $kullanicicek['kullanici_zamann'] ?>" id="go-date" >
    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">
    <button name="addinfo" type="submit" class="registerbtn">Confirm</button>
    </form>
  

<?php include 'footer.php'; ?>
