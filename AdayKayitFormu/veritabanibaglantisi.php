<!-- Tüm sayfalarda kullanmak üzere oluşturduğumuz veritabanı bağlantımız-->

<?php
	$host = "localhost"; //host
	$user = "root";  // host id
	$password = "";  // password local olduğu için varsayılan şifre boş
	$databasename = "adaylar"; // veritabanı adımız
	

	//veritabanı bağlantımızın durumunu kontrol ediyoruz.


	try
    
    {
		$baglanti = new PDO("mysql:host=$host;dbname=$databasename",$user,$password);
		date_default_timezone_set('Europe/Istanbul');
		
		// türkçe karakter için utf8
		$baglanti->exec("SET CHARSET UTF8");


		
      
		//eğer hata olursa pdo nun exception komutu ile ekrana yazdırıyoruz

	}
    catch(PDOException $e)
    {
		die ("Veritabanına baglanamadı!!!");
	}


?>

	
