<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
	<title>Przykładowy tytuł</title>
	<link rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
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
    </div>
  <div class="login-box">
  <h2>Formularz zmiany hasła</h2>
    <form action="newpassword.php" method="post" class="form1">
    <div class="form--input-box">
						<label for="login">Login:</label>
						<input type="text" name="login" id="login">
					</div>
					<div class="form--input-box">
						<label for="password">Nowe hasło:</label>
						<input type="password" name="password" id="password" required>
					</div>
					<div class="form--input-box">
						<label for="password">Powtórz hasło:</label>
						<input type="password" name="password2" id="password" required>
					</div>
      <input type="submit" name="logowanie"  class="button" value="Ustaw"/> <br>
    </form>
    <br />

    <?php

$conn = new mysqli("localhost","root","","uzytkownik");

session_start();

	if(isset($_POST["login"]))
	{
		$wszystko_OK=true;
		//Sprawdź poprawność loginu
        $login = $_POST['login'];
        
        $zapytanie="SELECT count(*) FROM dane where login='$login'";
        $wynik=mysqli_query($conn,$zapytanie);

        $wiersz=mysqli_fetch_row($wynik);
         $ile_znaleziono=$wiersz[0];
        if ($ile_znaleziono>0) {

        $password = $_POST['password'];
		$password2 = $_POST['password2'];
		
		if((strlen($password)<8) || (strlen($password)>20))
		{
			$wszystko_OK=false;
			echo 'Hasło musi posiadać od 8 do 20 znaków!';
		}
		
		if($password!=$password2)
		{
			$wszystko_OK=false;
			echo 'Hasła różnią się!';
		}
		
		if($wszystko_OK==true)
		{
            $odp = mysqli_query($conn, "UPDATE dane set password='" . $_POST["password"] . "', password2='" . $_POST["password2"] . "' WHERE login='" . $_POST["login"] . "'");
			
			if($odp)
			{
				echo "Zmieniono hasło!";
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
    else{

     echo 'Niezarejestrowany użytkownik nie ma możliwości zmiany hasła!';   } 
		

	}


?>
    </div>
    </div>

    
  
</html>