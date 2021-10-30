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
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "ders");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
		die();
	}

	if(isset($_POST['gonder']))
	{
		$Gelenad			=	$_POST["ad"];
		$Gelensoyad			=	$_POST["soyad"];
		$Gelenkullaniciadi	=	$_POST["kullaniciadi"];
		$Gelensifre			=	$_POST["sifre"];
		$Gelenemail			=	$_POST["email"];
		$Gelenyas 			= 	$_POST["yas"];
		$Gelensehir			=	$_POST["dyeri"];
		$Gelencinsiyet		=	$_POST["cins"];
		$Gelenhobi			=	$_POST["hobi"];

		$Gelengirilenkod	=	$_POST["girilenkod"];
		$Gelenuretilenkod	=	$_POST["uretilenkod"];


		if($Gelengirilenkod != $Gelenuretilenkod)
		{
			header("Location:index.php");
			die();
		}
		else
		{
			$birlestir 	 	 =  	implode("," , $Gelenhobi);

			$Ekle	=	$VeritabaniBaglantisi->query("INSERT INTO uyeler
			(adi , soyadi,kullaniciadi,sifresi, emailadresi,yas, dogumyeri , cinsiyet,hobi) 
			values ('$Gelenad','$Gelensoyad','$Gelenkullaniciadi', '$Gelensifre', '$Gelenemail', '$Gelenyas',
			'$Gelensehir', '$Gelencinsiyet' , '$birlestir')");
				if($Ekle){
					header("Location:index.php");
					exit();
				}else{
					echo "Sorgu Hatası<br /><br />";
				}
		}
	}
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>