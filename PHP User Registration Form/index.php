<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <title>İleri Seviye Kullanıcı kayıt formu</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
	<?php
		$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "form");
		mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
		
		if(mysqli_connect_errno())
		{
			echo "Bağlantı Sorunu <br />";
			echo "Hata Açıklaması : " . mysqli_connect_errno();
			die();
		}
		
		mysqli_close($VeritabaniBaglantisi);
	?>


    <div class="login-box">
        <h2><div class="heart">DENİZ</div>~~Kullanıcı Girişi~~</h2>
		<form action="sonuc.php" method="post">
			
            <div class="user-box">
                <input type="text" name="adisoyadi" required="">
                <label>Kullanıcı Adı</label>
            </div>

            <div class="user-box">
                <input type="password" name="sifre" required="">
                <label>Parola</label>
            </div>

			<a href="sonuc.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>Giriş yap 
				<input type="submit" value="&nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp  &nbsp  &nbsp    &nbsp">
			</a> 
        </form>
    </div>
</body>
</html>