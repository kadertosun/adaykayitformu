<?php 

include 'veritabanibaglantisi.php';




$aday_adi = $_POST['aday_adi'];

$aday_soyadi = $_POST['aday_soyadi'];


if($_POST)
{
    $sqlekle="INSERT INTO tbl_adaylar ( aday_adi,aday_soyadi) 
    VALUES ('$aday_adi','$aday_soyadi')";
   $baglanti->query($sqlekle);


}


?>




<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aday Kayit Formu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
<div class="card">

<div class="card-body">

<form action="mail.php"  method="POST">

<div class="form-row">

   <div class="form-group col-md-6">

         <label > Aday Adı:</label>
         <input type="text" class="form-control" id="aday_adi" 
         name="aday_adi" placeholder="Ad" >

  </div>

</div>

   <div class="form-row">
     <div class="form-group col-md-6">

         <label>Aday Soyadi:</label>
        
         <input type="text" class="form-control" id="aday_soyadi"
         name="aday_soyadi" placeholder="Soyad" >

     </div>
   </div>
           

 <div class="form-col">
  <div class="form-group ">
  <button type="submit" class="btn btn-success">Kaydet</button>
 
  </div>
 </div>
</form>
<a href="mail.php"><button class="btn btn-primary">Bildir</button></a>
</div>

</div>

</body>
</html>
