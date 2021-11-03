<!doctype html>
<html lang="tr-TR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="tr">
	<meta charset="utf-8">
	<title>Deniz UKU</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<?php
	#connect to database
	$DatabaseConnection	=	mysqli_connect("localhost", "root", "", "ders");
	mysqli_set_charset($DatabaseConnection, "UTF8");
	
	if(mysqli_connect_errno())
	{
		echo "Connection error<br />";
		echo "Error Description : " . mysqli_connect_error();
		die();
	}

	#Filtering
	function filtering($Deger)
	{
		$IslemBir	=	trim($Deger);
		$IslemIki	=	strip_tags($IslemBir);
		$IslemUc	=	htmlspecialchars($IslemIki, ENT_QUOTES);
		$Sonuc		=	$IslemUc;
			return $Sonuc;
	}

	#When the button is clicked --> send
	if(isset($_POST['send']))
	{
		#RADIO
		$incomingPronoun		=	filtering($_POST["pronoun"]);
		#TEXT
		$incomingname			=	filtering($_POST["name"]);
		#TEXT
		$incomingage			=	filtering($_POST["age"]);
		#TEXXT
		$incomingemail			=	filtering($_POST["email"]);
		#CHECKBOX
		$incomingdil			=	$_POST["dil"];
		#SELECT
		$incomingmusic			=	filtering($_POST["music"]);
		#RADİO
		$incomingeat			=	filtering($_POST["eat"]);
		#TEXTAREA
		$incomingmessage		=	filtering($_POST["message"]);


		if($incomingname != "" && $incomingemail != "")
		{
			# code...
			#Checkbox I combined to save the data from the tan to the database.
			$combine 	 	 =  	implode("," , $incomingdil);
			#I registered the data entered to the database.
			$Save	=	mysqli_query($DatabaseConnection, "INSERT INTO member 
			(pronoun, username, age, email, programminglanguage, music, eat,usermessage) values 
			('$incomingPronoun', '$incomingname', '$incomingage', '$incomingemail', 
			'$combine', '$incomingmusic', '$incomingeat','$incomingmessage')");
				if($Save)
				{
					header("Location:index.php");
					exit();
				}else
				{
					echo "Sorgu Hatası<br /><br />";
				}
		}
		elseif($incomingname == "" || $incomingemail == "")
		{
			header("Location:index.php");
			exit();
		}		
	}

	#When the button is clicked --> search
	elseif(isset($_POST['search']))
	{
		$find = filtering($_POST['ara']);

		if($find=="")
		{ 
		} 
		else
		{ 
			#Finding user registration
			$Search = mysqli_query($DatabaseConnection,"SELECT * FROM member WHERE username LIKE '$find%'");
			if(mysqli_num_rows($Search) > 0)
			{
				while($row = mysqli_fetch_assoc($Search))
				{
					$username 		= 	$row['username'];
					$pronoun 	 	= 	$row['pronoun'];
					$age 			= 	$row['age'];
					$email 	 		= 	$row['email'];
					$prglanguage 	= 	$row['programminglanguage'];
					$music 	 		= 	$row['music'];
					$eat 	 		= 	$row['eat'];
					$usermessage 	= 	$row['usermessage'];
	
					echo <<<EOF
					<center>
					<h1>User information found as a result of search</h1>
					<table class='rwd-table'>
					<tr>
						<th>User Name</th>
						<th>E-mail</th>
						<th>Age</th>
						<th>Programming Language</th>
					</tr>
					<tr>
						<td data-th='Movie Title'>$username</td>
						<td data-th='Genre'>$email </td>
						<td data-th='Year'>$age </td>
						<td data-th='Gross'>$prglanguage</td>
					</tr>
					</table>
					</center>
					EOF;
				}
			}
			elseif (mysqli_num_rows($Search) == 0)
			{
				echo "
				<font size='7' face='Georgia, Arial' color='red'>
				No such record was found in the database!
				</font>
					";
			}
		}
	}
	#When the button is clicked --> update
	elseif(isset($_POST['update']))
	{
		$updatelogin 					=   filtering($_POST['updatelogin']); 
		$incomingid				=	filtering($_POST["id"]);
		$Search = mysqli_query($DatabaseConnection,"UPDATE member SET username = '$updatelogin' WHERE id=" . $incomingid);

		header("Location:index.php");
		exit();
	}
	#When the button is clicked --> delete
	elseif(isset($_POST['delete']))
	{
		$incomingid				=	filtering($_POST["id"]);
		$Search = mysqli_query($DatabaseConnection,"DELETE FROM member WHERE id =" . $incomingid);
		header("Location:index.php");
		exit();
	}

	mysqli_close($DatabaseConnection);
	?>
</body>
</html>