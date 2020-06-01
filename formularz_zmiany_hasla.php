<?php
	session_start();
	if($_SESSION["login"]) {
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
					echo $_SESSION["login"];
					?>
					</h3>	
			
                    <form action="formularz_zmiany_hasla.php" method="post" class="form1">
                    <div class="form--input-box">
						<label for="password">Aktualne hasło:</label>
						<input type="password" name="currentPassword" id="password"  required>
					</div>
					<div class="form--input-box">
						<label for="password">Nowe hasło:</label>
						<input type="password" name="newPassword" id="password" required>
					</div>
					<div class="form--input-box">
						<label for="password">Powtórz hasło:</label>
						<input type="password" name="confirmPassword" id="password" required>
					</div>
                 <input type="submit" name="logowanie"  class="button" value="Ustaw"/> <br>
                 </form>
				
				 <?php
					
						$conn = mysqli_connect("localhost", "root", "", "uzytkownik") or die("Connection Error: " . mysqli_error($conn));
						
						if (count($_POST) > 0) {
							$result = mysqli_query($conn, "SELECT *from dane WHERE login='" . $_SESSION["login"] . "'");
							$row = mysqli_fetch_array($result);
							if ($_POST["currentPassword"] == $row["password"] AND $_POST["newPassword"]==$_POST["confirmPassword"]) {
								mysqli_query($conn, "UPDATE dane set password='" . $_POST["newPassword"] . "', password2='".$_POST["confirmPassword"]."' WHERE login='" . $_SESSION["login"] . "'");
								echo 'Twoje haslo zostało zmienione!';
							} else
								echo 'Twoje hasło nie zostało zmienione! <br> Hasła różnią się!' ;
						}
				?>

				
					</div>
			</div>
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