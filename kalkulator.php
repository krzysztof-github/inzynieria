<?php
	session_start();
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Przykładowy tytuł</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/fa7a4264a9.js" crossorigin="anonymous"></script>
</head>

<body>


	<div id="top">
		<header class="NAGLOWEK">
			<nav id="MENU">
				<ul>
				<li>
					<li><a href="logout.php">Wyloguj</a></li>
					<li><a href="wysz_uzyt.php">Produkty</a></li>
					<li><a href="kalkulator.php">Kalkulator</a></li>
					<li><a href="paneluzytkownika.php">Konto</a></li>
				</ul>
			</nav>
		</header>
		</div>

		<article>
		<?php
		if($_SESSION["login"]) {
			echo 'Jesteś zalogowany jako &nbsp';
		echo $_SESSION["login"] ; ?>
			<form class="form">
				<div class="login-box1">
				<label for="weight"> <span class="format2"> Podaj swoją wage: </label> </span> <input class="los" type="number" > kg</br> 
				<label for="height">Podaj swój wzrost:  </label> <span class="format"> <input class="los" type="number"> cm</br></span> 
				<label for="age"><span class="format3">Podaj swój wiek: </label> </span> <span class="format1"> <input class="los" type="number"> lat</br> </span>
				<label>Wybierz płeć:</label>
				<input type="radio" name='sex' value="male"><label for="male">Mężczyzna</label>
				<input type="radio" name='sex' value="female"><label for="female">Kobieta</label><br>
				<label for="activity-select">Wybierz swój rodzaj aktywności:</label> 
				<select name="activities" id="activity-select">
					<option value="">Wybierz jedną opcje</option>
					<option value="none">Leżący lub siedzący tryb życia, brak aktywności fizycznej</option>
					<option value="low"> Praca siedząca, aktywność fizyczna na niskim poziomie</option>
					<option value="moderate">Praca nie fizyczna, trening 2 razy w tygodniu</option>
					<option value="high">Lekka praca fizyczna, trening 3-4 razy w tygodniu</option>
					<option value="very high">Praca fizyczna, trening 5 razy w tygodniu</option>
					<option value="huge">Ciężka praca fizyczna, codzienny trening</option>
				</select></br> <br>
				<button>Oblicz moje zapotrzebowanie! <i class="fas fa-arrow-circle-right"></i></button> <br>
				<?php
		}else 
		{
			header('Location: logowanie.php');
		};
?>
			</form>
			<p class="result"></p>
		</article>
		<footer id="STOPKA"></footer>
	</div>
	<script src="calculator.js"></script>

</body>

</html>