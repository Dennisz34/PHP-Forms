<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Deniz UKU</title>
</head>

<body>
	<?php
	#Veri tabanı bağlantısı yapıldı ve olası hatalar ekrana yazdırıldı.
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "form");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Sorunu<br />";
		echo "Hata Açıklaması : " . mysqli_connect_errno();
		die();
	}
	
	#Formdan gelen bilgiler POST ile çekerek değişkenlere depolandı.
	$GelenadisoyadiDegeri	=	$_POST["adisoyadi"];
	$GelensifreDegeri		=	$_POST["sifre"];

	#Gelen veriler veri tabanına kayıt edildi.
	$Ekle	=	mysqli_query($VeritabaniBaglantisi, "INSERT INTO uyeler (kullaniciadi , parola) values 
	('$GelenadisoyadiDegeri', '$GelensifreDegeri')");
		if($Ekle){
			#Veri tabanına kayıt edildikten sonra index sayfasına geri dön
			header("Location:index.php");
			exit();
		}else{
			die("Bu kullanıcı adı daha önce alınmıştır!");
		}

	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>