<?php
include 'veritabanibaglantisi.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

if($_POST)
{
//index.php sayfasından verileri alıyoruz
$aday_adi = $_POST['aday_adi'];

$aday_soyadi = $_POST['aday_soyadi'];

//gelen veriyi veritabanına gönderiyoruz
$sqlekle="INSERT INTO tbl_adaylar ( aday_adi,aday_soyadi) 
VALUES ('$aday_adi','$aday_soyadi')";
$baglanti->query($sqlekle);
}
//aday adı ve mailin dolu gelmesi durumunda mail gönderme işlemi gerçekleştiriyoruz.
	
   if($_POST['aday_adi'] && $_POST['aday_soyadi'])
   {







	$mail = new PHPMailer(true);
	

	
	$mail->SMTPDebug = 2;									
	$mail->isSMTP(true);	
	$mail->SMTPDebug=SMTP::DEBUG_OFF;
									
	$mail->Host	 = 'smtp-mail.outlook.com';		//outlook için smtp ayarı gmail veya farklı sunucular kullanılacaksa dikkat edilmesi gerekir.			
	$mail->SMTPAuth = true;							
	$mail->Username = 'mailatacaginizhesabiniz@outlook.com';	//mail hesabınızı yazın		
	$mail->Password = 'mailsifreniz';	//mail şifrenizi yazın					
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;
	$mail->CharSet='UTF-8';
    //mail gönderilecek adres
	$mail->setFrom('gonderilecekadres@outlook.com', '');		
	$mail->addAddress('mailadresio@outlook.com');

	
	$mail->isHTML(true);								
	$mail->Subject = 'Yeni Aday Kaydı';


	$mail->Body =
	"
	<b>Sisteme  yeni aday kaydı yapıldı </b>
	<br><br>
	<table>

		<tr>
		<tr>
		<td>Aday Adı</td>
		<td>:</td>
		<td>$aday_adi</td>
	    </tr>
			<td>Aday Soyadi</td>
			<td>:</td>
			<td>$aday_soyadi</td>
		 </tr>
	
		
	
	
	</table>

 
   <br>

	
	
";

	if($mail->Send()) {

     echo 'Mail Başarılı Bir Şekilde Gönderildi. ';
	} 
	else {
		echo 'Mail gönderilemedi!';
	}

   }
    else{
		echo "Lütfen gerekli alanları doldurunuz!";
	}

?>