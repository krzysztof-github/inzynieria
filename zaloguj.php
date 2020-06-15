<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
	{
		header('Location: logowanie.html');
		exit();
	}


	require_once "connect.php";
	
	$conn = @new mysqli($host, $db_login, $db_password, $db_name);
	
	
	if ($conn->connect_errno!=0)
	{
		echo "Error: ".$conn->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$password = $_POST['password'];	
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");
		
		$sql = "SELECT * FROM dane WHERE login = '$login' AND password = '$password'";
		
		if($rezultat = @$conn->query($sql))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['login'] = $wiersz['login'];
				$_SESSION['zapotrzebowanie'] = $wiersz['zapotrzebowanie'];
				$_SESSION['zjedzone_kcal'] = $wiersz['zjedzone_kcal'];

				unset($_SESSION['blad']);
				$rezultat->free_result();
				
				header('Location: paneluzytkownika.php');
			}
			else
			{
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: logowanie.php');				
			}
		}
		
		
		
		
		
		$conn->close();
	}
	
	
	
?>