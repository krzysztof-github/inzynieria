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
			$conn = new mysqli("localhost","root","","test");
			
			$login = $_POST['login'];
			$password = $_POST['password'];
			$sql="select * from test where login ='$login' and password='$password'";
			$result = $mysqli->query($sql);
			$rows= $mysli_num_rows($result);
			if($rows==1)
			{session_start();
				$_SESSION['login']=$login;
				$_SESSION['password']=$password;
					$login_info =$mysli_fetch_array($result);
					$_SESSION['login']=$login_info['login'];
			}

			else
			{
				echo 'not allowed';
			}

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
			<div class="login-box">
				<h2>Witamy</h2>
				<p>Zaloguj się do swojego konta</p>
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
			</div>

		</article>
		<footer id="STOPKA"></footer>
	</div>
</body>

</html>