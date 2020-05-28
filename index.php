<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<title>BeFit</title>
	<link rel="stylesheet" href="style.css">

</head>

<?php

$conn = new mysqli("localhost","root","","uzytkownik");

?>

<body>
	<div id="top">
		<header class="NAGLOWEK">
			<nav id="MENU">
				<ul>
				<li>
					<li><a href="wyszukiwarka.php">Produkty</a></li>
					<li><a href="kalkulator.php">Kalkulator</a></li>
					<li><a href="logowanie.php">Logowanie</a></li>
					<li><a href="index.php">BeFit</a></li>
				</ul>
			</nav>
		</header>
	</div>

		<articlee>
		<h4> Najprostszy kalkulator <br>
			 <span class="text"> kalorii na świecie </span></h4>
		<h5 class="text1"> Z nami utrzymasz zdrowy tryb życia</h5>
		<button type="submit" class="buttonn"><a href="logowanie.php">Dołącz już teraz!</a> </button>
	
		</articlee>

	
		<footer id="STOPKA"></footer>
	

</body>

</html>