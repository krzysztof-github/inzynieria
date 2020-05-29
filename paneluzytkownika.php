<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>BeFit</title>
	<link rel="stylesheet" href="style.css">

</head>

<body>
	<div id="top">
		<header class="NAGLOWEK">
			<nav id="MENU">
				<ul>
				<li>
					<li><a href="logout.php">Wyloguj</a></li>
					<li><a href="wyszukiwarka.php">Produkty</a></li>
					<li><a href="kalkulator.php">Kalkulator</a></li>
					<li><a href="paneluzytkownika.php">Konto</a></li>
					<li><a href="index.php">BeFit</a></li>
				</ul>
			</nav>
		</header>
	</div>

		<articlee>
		<div class="card-container">

		<div class="upper-container">
			<div class="image-container">
				<img src="profile.jpg" />
			</div>
		</div>

		<div class="lower-container">
				<div>
					<h3>
					<?php
					session_start();
					$con = mysqli_connect('localhost','root','','uzytkownik') or die('Unable To connect');
					if (isset($_SESSION['login'])) {
					echo $_SESSION['login'];
					}
					?>
					</h3>
					<h4>
					Ilość kalorii: 
					</h4>
					</div>
			</div>
			<ul class="liar">
			<li><a href="formularz_zmiany_hasla.php">Coś </a></li>
			<li><a href="formularz_zmiany_hasla.php">Zmień hasło</a></li>
			</ul>
		</div>
		</articlee>

	
		<footer id="STOPKA"></footer>
	

</body>

</html>