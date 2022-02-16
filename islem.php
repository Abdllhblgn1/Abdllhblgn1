<?php
ob_start();
session_start();

include 'baglan.php';


if (isset($_POST['kullanicikaydet'])) {
	echo $kullanici_ad=htmlspecialchars($_POST['kullanici_ad']); echo "<br>";
	echo $kullanici_soyad=htmlspecialchars($_POST['kullanici_soyad']); echo "<br>";
	echo $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); echo "<br>";

	echo $kullanici_passwordone=$_POST['kullanici_passwordone']; echo "<br>";
	echo $kullanici_passwordtwo=$_POST['kullanici_passwordtwo']; echo "<br>";
	echo $kullanici_ulke=$_POST['kullanici_ulke']; echo "<br>";
	echo $kullanici_gidilecek_ulke=$_POST['kullanici_gidilecek_ulke']; echo "<br>";



	if ($kullanici_passwordone==$kullanici_passwordtwo) {


		if (strlen($kullanici_passwordone)>=6) {


// Başlangıç

			$kullanicisor=$db->prepare("select * from kullanici where kullanici_mail=:mail");
			$kullanicisor->execute(array(
				'mail' => $kullanici_mail
				));

			//dönen satır sayısını belirtir
			$say=$kullanicisor->rowCount();



			if ($say==0) {

				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.
				$password=md5($kullanici_passwordone);

				$kullanici_yetki=5;

			//Kullanıcı kayıt işlemi yapılıyor...
				$kullanicikaydet=$db->prepare("INSERT INTO kullanici SET
					kullanici_ad=:kullanici_ad,
					kullanici_soyad=:kullanici_soyad,
					kullanici_mail=:kullanici_mail,
					kullanici_password=:kullanici_password,
					kullanici_yetki=:kullanici_yetki,
					kullanici_ulke=:kullanici_ulke,
					kullanici_gidilecek_ulke=:kullanici_gidilecek_ulke


					");
				$insert=$kullanicikaydet->execute(array(
					'kullanici_ad' => $kullanici_ad,
					'kullanici_soyad' => $kullanici_soyad,
					'kullanici_mail' => $kullanici_mail,
					'kullanici_password' => $password,
					'kullanici_yetki' => $kullanici_yetki,
					'kullanici_ulke' => $kullanici_ulke,
					'kullanici_gidilecek_ulke' => $kullanici_gidilecek_ulke
					
					));

				if ($insert) {


					header("Location:signin.php?durum=loginbasarili");



				//Header("Location:../production/genel-ayarlar.php?durum=ok");

				} else {


					header("Location:signup.php?durum=basarisiz");
				}

			} else {

				header("Location:signup.php?durum=mukerrerkayit");



			}




		// Bitiş



		} else {


			header("Location:signup.php?durum=eksiksifre");


		}



	} else {



		header("Location:signup.php?durum=farklisifre");
	}
	


}

if (isset($_POST['addinfo'])) {


	$kullanici_id=$_POST['kullanici_id'];

	
	echo $kullanici_age=htmlspecialchars($_POST['kullanici_age']); echo "<br>";
	echo $kullanici_social=htmlspecialchars($_POST['kullanici_social']); echo "<br>";
	echo $kullanici_euniversity=htmlspecialchars($_POST['kullanici_euniversity']); echo "<br>";
	echo $kullanici_zamann=htmlspecialchars($_POST['kullanici_zamann']); echo "<br>";
	


			//Kullanıcı kayıt işlemi yapılıyor...
				$kullaniciguncelle=$db->prepare("UPDATE kullanici SET
					
					kullanici_age=:kullanici_age,
					kullanici_social=:kullanici_social,
					kullanici_euniversity=:kullanici_euniversity,
					kullanici_zamann=:kullanici_zamann
					WHERE kullanici_id ={$_POST['kullanici_id']}");

				$update=$kullaniciguncelle->execute(array(
					
					'kullanici_age' => $_POST['kullanici_age'],
					'kullanici_social' => $_POST['kullanici_social'],
					'kullanici_euniversity' => $_POST['kullanici_euniversity'],
					'kullanici_zamann' => $_POST['kullanici_zamann']
					
					
					));
if ($update) {

		Header("Location:addinfo.php?durum=ok");

	} else {

		Header("Location:addinfo.php$kullanici_id&durum=no");
	}

			}










if (isset($_POST['usergiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);


	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password,
		'yetki' => 5
		));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:explorelogin.php");
		exit;



	} else {

		header("Location:signin.php?durum=no");
		exit;
	}
	

}
if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);


	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password,
		'yetki' => 7
		));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:admin.php");
		exit;



	} else {

		header("Location:admingiris.php");
		exit;
	}
	

}

if (isset($_POST['sendmessage'])) {
	echo $message_text=htmlspecialchars($_POST['message_text']); echo "<br>";

	echo $message_gid=$_POST['kullanici_id']; echo "<br>";
	echo $message_social=$_POST['kullanici_social']; echo "<br>";
	echo $message_ad=$_POST['kullanici_ad']; echo "<br>";
	echo $message_from=$_POST['message_from']; echo "<br>";

	$messagekaydet=$db->prepare("INSERT INTO roomtrr SET
					message_text=:message_text,
					message_gid=:message_gid,
					message_social=:message_social,
					message_ad=:message_ad,
					message_from=:message_from




					");

	$insert2=$messagekaydet->execute(array(
					'message_text' => $message_text,
					'message_gid' => $message_gid,
					'message_social' => $message_social,
					'message_ad' => $message_ad,
					'message_from' => $message_from

					
						));

if ($insert2) {
	


					header("Location:room$message_from.php");

}else{
	header("Location:room$message_from.php?durum=no");
}

}

if (isset($_POST['editinfo'])) {




	$kullanici_id=$_POST['kullanici_id'];

	
	echo $kullanici_ad=htmlspecialchars($_POST['kullanici_ad']); echo "<br>";
	echo $kullanici_soyad=htmlspecialchars($_POST['kullanici_soyad']); echo "<br>";
	echo $kullanici_ulke=htmlspecialchars($_POST['kullanici_ulke']); echo "<br>";
	echo $kullanici_gidilecek_ulke=htmlspecialchars($_POST['kullanici_gidilecek_ulke']); echo "<br>";
	
	


			//Kullanıcı kayıt işlemi yapılıyor...
				$kullaniciguncelle2=$db->prepare("UPDATE kullanici SET
					
					kullanici_ad=:kullanici_ad,
					kullanici_soyad=:kullanici_soyad,
					kullanici_ulke=:kullanici_ulke,
					kullanici_gidilecek_ulke=:kullanici_gidilecek_ulke
					WHERE kullanici_id ={$_POST['kullanici_id']}");

				$update2=$kullaniciguncelle2->execute(array(
					
					'kullanici_ad' => $_POST['kullanici_ad'],
					'kullanici_soyad' => $_POST['kullanici_soyad'],
					'kullanici_ulke' => $_POST['kullanici_ulke'],
					'kullanici_gidilecek_ulke' => $_POST['kullanici_gidilecek_ulke']
					
					
					));
if ($update2) {

		Header("Location:editprofile.php?durum=ok");

	} else {

		Header("Location:editprofile.php$kullanici_id&durum=no");
	}

			}

			if (isset($_POST['updatepassword'])) {

	$kullanici_id=$_POST['kullanici_id'];

	echo $kullanici_passwordone=$_POST['kullanici_passwordone']; echo "<br>";
	echo $kullanici_passwordtwo=$_POST['kullanici_passwordtwo']; echo "<br>";


	if ($kullanici_passwordone==$kullanici_passwordtwo) {

		if (strlen($kullanici_passwordone)>=6) {

			$password=md5($kullanici_passwordone);
				$kullaniciguncelle3=$db->prepare("UPDATE kullanici SET
					
					kullanici_password=:kullanici_password
					WHERE kullanici_id ={$_POST['kullanici_id']}");

				$update3=$kullaniciguncelle3->execute(array(
					
					'kullanici_password' => $password
					
					
					));


		}else {


			header("Location:updatepassword.php?durum=eksiksifre");


		}



	}  else {

		header("Location:updatepassword.php?durum=farklisifre"); }
		

}
if ($update3) {

		Header("Location:updatepassword.php?durum=ok");

	}

if ($_GET['kullanicisil']=="ok") {

	$sil=$db->prepare("DELETE from kullanici where kullanici_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['kullanici_id']
		));


	if ($kontrol) {


		header("location:admin.php?sil=ok");


	} else {

		header("location:admin.php?sil=no");

	}


}

if ($_GET['messagesil']=="ok") {

	$sil=$db->prepare("DELETE from roomtrr where message_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['message_id']
		));


	if ($kontrol) {


		header("location:admin.php?messagesil=ok");


	} else {

		header("location:admin.php?messagesil=no");

	}


}


?>