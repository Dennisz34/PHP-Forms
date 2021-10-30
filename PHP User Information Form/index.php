<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Kullanıcı Formu</title>
<style type="text/css">
        input:focus,
        select:focus {
            outline: none
        }
        
        body {
            font: 12px tahoma
        }
        
        .form1 {
            width: 610px;
            height: 450px;
            margin: 60px auto;
            background: url(images/formarka.jpg) no-repeat;
            padding: 100px 0 0 40px
        }
        
        td {
            height: 30px
        }
        
        #dugme {
            width: 120px;
            height: 30px;
            border: 2px solid #9d3a56;
            background: #933;
            border-radius: 3px;
            color: #fff;
            font-weight: bold
        }
        
        #dugme:hover {
            border-color: #9b4562;
            background: #72273c
        }
        
        #ad,
        #soyad,
        #kadi,
        #parola,
        #mail,
        #girilenkod {
            width: 175px;
            height: 25px;
            border: 1px solid #bbb;
            color: #ababab;
            background: #fff;
            border-radius: 3px;
            padding: 0 0 0 2px
        }
        
        #gun,
        #ay {
            width: 50px;
            height: 25px;
            color: #000;
            border: 1px solid #999;
            background: #FFF;
            border-radius: 3px;
        }
        
        #yil,
        #yas,
        #dyeri {
            width: 100px;
            height: 25px;
            color: #000;
            border: 1px solid #999;
            background: #FFF;
            border-radius: 3px;
        }
        
        #uretilenkod {
            width: 135px;
            height: 56px;
            background: url(images/guvenlik.jpg) no-repeat;
            font: bold 30px tahoma;
            color: #fff;
            text-align: center;
            border: none;
            text-shadow: 0 1px 1px #000
        }
        
        span {
            color: #b00;
            font: 11px tahoma
        }
    </style>

    <script type="text/javascript">
        function koduret()
        {
            //Rastgele sayı ve karakter üret.
            var kodlar = "";
            for (var i = 1; i <= 6; i++) {
                if (Math.round(Math.random()) == 1) {
                    kodlar = kodlar + String.fromCharCode(65 + 25 * Math.random());
                } else {
                    kodlar = kodlar + String.fromCharCode(48 + 9 * Math.random());
                }
            }
            document.getElementById("uretilenkod").value = kodlar;
        }

        function odaklan(x) {
            if (x == "ad" || x == "soyad" || x == "kadi" || x == "mail" || x == "girilenkod") {
                document.getElementById(x).value = "";
                document.getElementById(x).style.background = "#fff7db";
                document.getElementById(x).style.color = "#000";
                document.getElementById(x).style.borderColor = "#000";
            }
        }

        function cikis(x, y) {
            if (y == "") {
                if (x == "ad") {
                    document.getElementById(x).value = "Adınızı yazınız";
                }
                if (x == "soyad") {
                    document.getElementById(x).value = "Soyadınızı yazınız";
                }
                if (x == "kadi") {
                    document.getElementById(x).value = "Kullanıcı adını yazınız";
                }
                if (x == "mail") {
                    document.getElementById(x).value = "E-Mail giriniz";
                }
                if (x == "girilenkod") {
                    document.getElementById(x).value = "Güvenlik kodunu giriniz";
                }

                document.getElementById(x).style.background = "#fff";
                document.getElementById(x).style.color = "#ababab";
                document.getElementById(x).style.borderColor = "#bbb";

            } else {
                document.getElementById(x).style.background = "#fff";
                document.getElementById(x).style.color = "#000";
                document.getElementById(x).style.borderColor = "#bbb";

            }
        }

        function islem() {
            document.getElementById("aduyari").innerHTML = "";
            document.getElementById("soyaduyari").innerHTML = "";
            document.getElementById("kadiuyari").innerHTML = "";
            document.getElementById("mailuyari").innerHTML = "";
            document.getElementById("parolauyari").innerHTML = "";
            document.getElementById("guvenlikuyari").innerHTML = "";
            var kural, yazi;
            yazi = document.getElementById("mail").value;
            kural = /.+@.+\.+./;

            if (document.getElementById("ad").value == "Adınızı yazınız") {
                document.getElementById("aduyari").innerHTML = "Adınızı yazmadınız!";
            }
            if (document.getElementById("soyad").value == "Soyadınızı yazınız") {
                document.getElementById("soyaduyari").innerHTML = "Soyadınızı yazmadınız!";
            }
            if (document.getElementById("kadi").value == "Kullanıcı adını yazınız") {
                document.getElementById("kadiuyari").innerHTML = "Kullanıcı adını yazmadınız!";
            }
            if (document.getElementById("parola").value == "") {
                document.getElementById("parolauyari").innerHTML = "Şifrenizi yazmadınız!";
            }
            if (document.getElementById("mail").value == "E-Mail giriniz") {
                document.getElementById("mailuyari").innerHTML = "Mailinizi yazmadınız!";
            } else if (!kural.test(yazi)) {
                document.getElementById("mailuyari").innerHTML = "Geçersiz Mail!!"
            }
            if (document.getElementById("girilenkod").value == "Güvenlik kodunu giriniz") {
                document.getElementById("guvenlikuyari").innerHTML = "Güvenlik kodunu yazmadınız!";
            } else if (document.getElementById("uretilenkod").value != document.getElementById("girilenkod").value)
            {
                document.getElementById("guvenlikuyari").innerHTML = "Güvenlik kodu yanlış";
            }
        }
    </script>

</head>
<body onload="koduret()">
    <div class="form1">
        <form action="sonuc.php" method="post">
            <table width="630" border="0">
                <tr>
                    <td width="180">Adı:</td>
                    <td width="270">
						<input name="ad" id="ad" value="Adınızı yazınız" onfocus="odaklan(this.id)" 
						onblur="cikis(this.id,this.value)" type="text" />
					</td>
                    <td width="180"><span id="aduyari"></span></td>
                </tr>
                <tr>
                    <td>Soyadı:</td>
                    <td>
						<input name="soyad" id="soyad" value="Soyadınızı yazınız" onfocus="odaklan(this.id)" 
						onblur="cikis(this.id,this.value)" type="text" />
					</td>
                    <td><span id="soyaduyari"></span></td>
                </tr>
                <tr>
                    <td>Kullanıcı Adı:</td>
                    <td>
						<input name="kullaniciadi" id="kadi" value="Kullanıcı adını yazınız" onfocus="odaklan(this.id)" 
						onblur="cikis(this.id,this.value)" type="text" />
					</td>
                    <td><span id="kadiuyari"></span></td>
                </tr>
                <tr>
                    <td>Parola:</td>
                    <td>
						<input name="sifre" id="parola" type="password" />
                    </td>
                    <td>
						<span id="parolauyari"></span>
                    </td>
                </tr>
                <tr>
                    <td>E-Mail:</td>
                    <td>
						<input name="email" id="mail" value="E-Mail giriniz" onfocus="odaklan(this.id)" type="text" 
						onblur="cikis(this.id,this.value)" /></td>
                    <td><span name="mailuyari" id="mailuyari"></span></td>
                </tr>
                <tr>
                    <td>Yaş:</td>
                    <td>
						<select name="yas" id="yas">
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
						</select></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Doğum Yeri:</td>
                    <td>
						<select name="dyeri" id="dyeri">
							<option value="Bursa">Bursa</option>
							<option value="İstanbul">İstanbul</option>
							<option value="Ankara">Ankara</option>
							<option value="İzmir">İzmir</option>
							<option value="Tokyo">Tokyo</option>
							<option value="Londra">Londra</option>
						</select></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Cinsiyet:</td>
                    <td>
						<input name="cins" type="radio" id="cins1" value="Erkek" /> Erkek 
						<input name="cins" type="radio" id="cins2" value="Kadın" /> Kadın
					</td>
                    <td>&nbsp;</td>
                </tr>
                 <tr>
                    <td>Hobiler:</td>
                    <td>
						<input name="hobi[]" type="checkbox" id="hobi1" value="Spor" /> Spor 
						<input name="hobi[]" type="checkbox" id="hobi2" value="Yazılım" /> Yazılım
                        <input name="hobi[]" type="checkbox" id="hobi3" value="Müzik" /> Müzik 
						<input name="hobi[]" type="checkbox" id="hobi4" value="Kitap" /> Kitap
					</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><input name="uretilenkod" type="text" id="uretilenkod" /></td>
                    <td><input name="girilenkod" id="girilenkod" value="Güvenlik kodunu giriniz" onfocus="odaklan(this.id)" 
					onblur="cikis(this.id,this.value)" type="text" /></td>
                    <td><span id="guvenlikuyari"></span></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
						<input name="gonder" id="dugme" type="submit" value="Gönder" onclick="islem()" />
					</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </form>
    </div>
    <?php
            $VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "ders");
            $VeritabaniBaglantisi->set_charset("UTF8");
            
            if($VeritabaniBaglantisi->connect_errno){
                echo "Bağlantı Hatası<br />";
                echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
                die();
            }
            $VeritabaniBaglantisi->close();
        ?>
</body>
</html>