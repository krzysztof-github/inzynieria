<?php

	session_start();

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
					<li><a href="logout.php">Wyloguj</a></li>
					<li><a href="produkty.php">Produkty</a></li>
					<li><a href="kalkulator.php">Kalkulator</a></li>
					<li><a href="logowanie.php">Logowanie</a></li>
					<li><a href="przyklad.php">BeFit</a></li>
				</ul>
			</nav>
		</header>

		<article>
			<div class="login-box">
				<h2>Witamy</h2>
				<p>Zaloguj się do swojego konta</p>
				<form action="zaloguj.php" method="post">
				<form action="#" class="form1">
					<div class="form--input-box">
						<label for="login">E-mail:</label>
						<input type="text" name="login" id="login" required>
					</div>
					<div class="form--input-box">
						<label for="password">Hasło:</label>
						<input type="password" name="password" id="password" required>
					</div>

					<div class="form--options">  
						<div>
							<a href="haslo.php">Zapomniałeś hasła?</a>
						</div>
						<div>
							Nie masz konta? <a href="rejestracja.php" target="_self">Zarejestruj się</a>
						</div>
					</div>
					<button type="submit" class="button">Zaloguj się</button>
				</form>
				</form>
				<?php
					if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
				?>
			</div>

		</article>
		<footer id="STOPKA"></footer>
	</div>
</body>

</html>