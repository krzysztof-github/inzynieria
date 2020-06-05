<?php

			session_start();

	if(isset($_POST["login"]))
	{
		
		$wszystko_OK=true;
		//Sprawdź poprawność loginu
		$login = $_POST['login'];
		
		//Sprawdzenie długości loginu
		if ((strlen($login)<3) || (strlen($login)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Nick musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($login)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		
		
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		
		if((strlen($password)<8) || (strlen($password)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo'] = "Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if($password!=$password2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo'] = "Hasła różnią się!";
		}
		
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$conn = new mysqli($host, $db_login, $db_password, $db_name);
			if ($conn->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				$rezultat = $conn->query("SELECT id from dane WHERE login='$login'");
				
				if(!$rezultat) throw new Exception($conn->error);
				
				$ile_takich_loginow = $rezultat->num_rows;
				if($ile_takich_loginow>0)
				{
					$wszystko_OK = false;
				$_SESSION['e_login'] = "Istnieje już konto o takim loginie!";
				}
			}
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
		$conn = new mysqli("localhost","root","","uzytkownik");
		
		if($wszystko_OK==true)
		{
			$odp = $conn->query("INSERT INTO dane(login, password, password2) VALUES ('$login', '$password', '$password2')");
			
			if($odp)
			{
				echo "Dodano użytkownika!";
			}
			else
			{
				echo "Błąd";
			}
		}
		else
		{
			
		}
			

		$conn->close();
		

	}

?>



<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Przykładowy tytuł</title>
	<link rel="stylesheet" href="style.css">
	
</head>



<body>
	<div id="top">
		<header class="NAGLOWEK">
			<nav id="MENU">
				<ul>
					<li><a href="wyszukiwarka.php">Produkty</a></li>
					<li><a href="kalkulator.php">Kalkulator</a></li>
					<li><a href="logowanie.php">Logowanie</a></li>
					<li><a href="index.php">BeFit</a></li>
				</ul>
			</nav>
		</header>

		<article>
			<div class="login-box">
				<h2>Rejestracja</h2>
				<div id="error"></div>
				<form action="rejestracja.php" method="post" >
				<div class="form1">
					<div class="form--input-box">
						<label for="login">Podaj login:</label>
						<input type="text" name="login" id="login" class="pass1" required>

					</div>

					<div class="form--input-box">
						<label for="password">Podaj hasło:</label>
						<input type="password" name="password" id="password" class="pass2" required>

					</div>
					<div class="form--input-box">
						<label for="password">Powtórz hasło:</label>
						<input type="password"  name="password2" id="password2" required> 
					</div>
					<button type="submit" class="button">Zarejestruj się</button>
						<?php
					
						if(isset($_SESSION['e_login']))
						{
						echo '<div class="error">'.$_SESSION['e_login'].'</div>';
						unset($_SESSION['e_login']);
						}
						
						?>
						<?php
						
						if(isset($_SESSION['e_haslo']))
						{
						echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
						unset($_SESSION['e_haslo']);
						}
						
						?>
					<ul class="errorList"></ul>
					</div>
					</form>

			</div>
			
		</article>
		<footer id="STOPKA"></footer>
	</div>

</body>

</html>