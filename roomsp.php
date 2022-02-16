<?php 

include 'loginheader.php'; 

//Belirli veriyi seçme işlemi
$messagesor=$db->prepare("SELECT * FROM roomtrr where message_from='sp' ");
$messagesor->execute();
$messagecek=$messagesor->fetch(PDO::FETCH_ASSOC);


?>
<style>
	.header-area {
    background-color: black;
}
.chatroom {
	
  margin: 0 auto;
  max-width: 80%;
  padding: 0 35px;
  max-height: 450px;
 
  overflow: scroll;

  
 
}

.containerr {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 1px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.containerr::after {
  content: "";
  clear: both;
  display: table;
}



.time-right {
  float: right;
  color: #aaa;
}


</style>

<br><br><br><br>
<center><h2> <em style="color:#ed563b;">Spain</em> Room <i class="fa fa-comment-o" aria-hidden="true"></i></h2></center><br>
 <?php 

                if (@$_GET['durum']=="no") {?>

                <div class="alert alert-danger">
                    <strong>Not Send!</strong> Try Again
                </div>
                    
                <?php } ?>




<div class="chatroom" id="scrool">

<?php 



                while($messagecek=$messagesor->fetch(PDO::FETCH_ASSOC)) {?>


                  <div class="containerr">
  <p style="color:#ed563b;"><a href="https://www.instagram.com/<?php echo $messagecek['message_social']?>/" ><?php echo $messagecek['message_ad'] ?></a></p>
  <h5  style=" font-size: 100%;"><?php echo $messagecek['message_text'] ?></h5>
  
  <span class="time-right" style="color:gray;" ><?php echo $messagecek['message_time'] ?></span>
</div>


          

                <?php  }

                ?>


<br>
</div>
<br>
<div style="width:78%; margin: 0 auto; max-width: 2000px; padding: 0 20px; ">
	<form action="islem.php" method="POST">
		<input type="text" name="message_text" style="width:85%; height: 95px; float: left;  " required>
		 <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">
     <input type="hidden" name="kullanici_social" value="<?php echo $kullanicicek['kullanici_social'] ?>">
     <input type="hidden" name="kullanici_ad" value="<?php echo $kullanicicek['kullanici_ad'] ?>">
     <input type="hidden" name="message_from" value="sp">
		<button type="submit" name="sendmessage" class="btn btn-primary" style="float:right;width:15%; height: 95px; border-radius: 5%">
    <i class="fa fa-paper-plane" aria-hidden="true"></i>
    </button>
	</form>
</div>
<br><br>
<p style="text-align:center;" >If you click on the user name you can link to Instagram account of user if it was recorded system <p>
<p style="text-align:center;" >Every 78 hours messages will be deleted<p>
<script>
  var element = document.getElementById("scrool");
element.scrollTop = element.scrollHeight;

</script>

<?php include 'footer.php'; ?>