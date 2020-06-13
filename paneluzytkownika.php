<?php
	session_start();
?>
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
					<li><a href="wysz_uzyt.php">Produkty</a></li>
					<li><a href="kalkulator.php">Kalkulator</a></li>
					<li><a href="paneluzytkownika.php">Konto</a></li>
				</ul>
			</nav>
		</header>
	</div>

		<articlee>
		<?php
		if($_SESSION["login"]) { ?>

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
					echo $_SESSION["login"]; ?>
					</h3>
					<h5>
					<?php
					 $connect = mysqli_connect('localhost','root','');
					 mysqli_select_db($connect, 'uzytkownik');

					 $result = mysqli_query($connect,"SELECT * FROM dane WHERE login='" . $_SESSION["login"] . "'");

					 echo 'Ilosc kalorii: ';
					 while($row = mysqli_fetch_array($result))
					 {
						echo  "{$row['data']}";
					 }
					
					?>
					</h5>
					
					</div>
			</div>
			<ul class="liar">
			<li><a href="produkty.php">Lista produktów </a></li>
			<li><a href="formularz_zmiany_hasla.php">Zmień<br> hasło</a></li>
			</ul>
		</div>
		</articlee>


	
		<footer id="STOPKA"></footer>

		<?php
		}else 
		{
			header('Location: logowanie.php');
		};
		?>
	

</body>

</html>