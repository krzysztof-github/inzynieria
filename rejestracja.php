<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Przykładowy tytuł</title>
	<link rel="stylesheet" href="style.css">
	
</head>

<?php
session_start();

	if(isset($_POST["login"]))
	{
		//Sprawdź poprawność loginu
		$login = $_POST['login'];
		
		//Sprawdzenie długości loginu
		if ((strlen($login)<3) || (strlen($login)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Nick musi posiadać od 3 do 20 znaków!";
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

		$conn = new mysqli("localhost","root","","test");
		
		$odp = $conn->query("INSERT INTO dane(login, password, password2) VALUES ('$login', '$password', '$password2')");
		
		if($odp)
		{
			echo "Dodano użytkownika!";
		}
		else
		{
			echo "Błąd";
		}
		$conn->close();
		
	}


?>


<body>
	<div id="top">
		<header class="NAGLOWEK">
			<nav id="MENU">
				<ul>
				<li><a href="produkty.php">Produkty</a></li>
					<li><a href="kalkulator.php">Kalkulator</a></li>
					<li><a href="logowanie.php">Logowanie</a></li>
					<li><a href="przyklad.php">BeFit</a></li>
				</ul>
			</nav>
		</header>

		<article>
			<br>
			<div class="login-box2">
				<h2>Rejestracja</h2>
				<div id="error"></div>
				<form method="POST" action="rejestracja.php">
				
				<form action="#" class="form1">
					<div class="form--input-box">
						<label for="login">Podaj e-mail:</label>
						<input type="text" name="login" id="login">
						<?php
						
						if(isset($_SESSION['e_login']))
						{
						echo '<div class="error">'.$_SESSION['e_login'].'</div>';
						unset($_SESSION['e_login']);
						}
						
						?>
					</div>
					<div class="form--input-box">
						<label for="password">Podaj hasło:</label>
						<input type="password" name="password" id="password">
						<?php
						
						if(isset($_SESSION['e_haslo']))
						{
						echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
						unset($_SESSION['e_haslo']);
						}
						
						?>
					</div>
					<div class="form--input-box">
						<label for="password">Powtórz hasło:</label>
						<input type="password" name="password2" id="password2">
					</div>
					<button type="submit" class="button">Zarejestruj się</button>
					<ul class="errorList"></ul>
				</form>
				
				</form>

			</div>
			
		</article>
		<footer id="STOPKA"></footer>
	</div>
<script class="error" defer src="rejestracja_walidacja.js" ></script> 
</body>

</html>