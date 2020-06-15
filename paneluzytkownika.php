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
						<?php echo $_SESSION["login"]; ?>
					</h3>
					<h5>
						<?php
							require 'connection.php';

							$result = mysqli_query($connect, "SELECT zapotrzebowanie FROM dane WHERE login = '" . $_SESSION['login'] . "'");
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$kalorie = $_SESSION['zapotrzebowanie'] - $_SESSION['zjedzone_kcal'];
							if ($kalorie < 0) {
								echo '<script type="text/javascript">alert("Przekroczyłeś dzienne zapotrzebowanie!")</script>';
							}
							echo 'Kalorie: ' . $kalorie . ' kcal';
							mysqli_close($connect);
						?>
					</h5>
					<?php
						require 'connection.php';

						if (isset($_POST['insert'])) {
							$result = mysqli_query($connect, "SELECT zjedzone_kcal FROM dane WHERE login = '" . $_SESSION['login'] . "'");
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$row["zjedzone_kcal"] = $row["zjedzone_kcal"] + $_POST["kalorie"];
							if (mysqli_query($connect, "UPDATE dane SET zjedzone_kcal = '" . $row['zjedzone_kcal'] . "' WHERE login = '" . $_SESSION['login'] . "'") === TRUE) {
								$_SESSION["zjedzone_kcal"] = $row["zjedzone_kcal"];
								header('Location: '.$_SERVER['REQUEST_URI']);
							} else {
								echo '<script type="text/javascript">alert("Wystąpił błąd przy dodawaniu produktu")</script>';
							}
							mysqli_close($connect);
						}
					?>
					<h6>
					<form action="" method="POST">
						<select name="kalorie">
							<?php
								require 'connection.php';
		
								$result = mysqli_query($connect, "SELECT Nazwa, kalorie FROM data");

								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									echo '<option value="' . $row["kalorie"] . '">' . $row["Nazwa"] . ' (' . $row["kalorie"] . ' kcal)</option>';
								}

								mysqli_close($connect);
							?>							
						</select>
						<input type="submit" name="insert" type="submit" value="dodaj">
					</form>
					</h6>
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