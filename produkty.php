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
				<li><a href="wysz_uzyt.php">Produkty</a></li>
					<li><a href="kalkulator.php">Kalkulator</a></li>
					<li><a href="paneluzytkownika.php">Konto</a></li>
				</ul>
			</nav>
		</header>
		<article>

    <table class="table">
        <tr>
          <td class="kolumna">NAZWA</td>
          <td  class="kolumna">KALORIE</td>
          <td  class="kolumna">BIAŁKO</td>
          <td class="kolumna">TŁUSZCZ</td>
          <td  class="kolumna">WĘGLOWODANY</td>
         </tr>

    <?php
		if($_SESSION["login"]) {

            $connect = mysqli_connect('localhost','root','');
            mysqli_select_db($connect, 'produkty');

            $results_per_page = 20;

            $sql="SELECT * FROM `data`";

            $result = mysqli_query($connect, $sql);
            $number_of_results = mysqli_num_rows($result);

            $number_of_pages = ceil($number_of_results/$results_per_page);

            if (!isset($_GET['page'])) {
                $page = 1;
              } else {
                $page = $_GET['page'];
              }

            $this_page_first_result = ($page-1)*$results_per_page;

            $sql='SELECT * FROM data LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
            $result = mysqli_query($connect, $sql);

            $sql='SELECT * FROM data LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
            $result = mysqli_query($connect, $sql);

            while($row = mysqli_fetch_array($result)) {?>
              <tr>
              <td class="kolumna"><?php echo $row['Nazwa'];?></td> 

              <td><?php echo $row['kalorie'];?></td>  
                  <td><?php echo $row['bialko'];?></td> 
                  <td><?php echo $row['tluszcz'];?></td> 
                  <td><?php echo $row['weglowodany'];?></td> 
              </tr>

              <?php
              }

              for ($page=1;$page<=$number_of_pages;$page++) {
                echo '<a href="produkty.php?page=' . $page . '"> &nbsp' . $page . '</a> ';
              }

            ?>

              </table>
		</article>
    
		<footer id="STOPKA"></footer>
    <?php
		}else 
		{
			header('Location: logowanie.php');
		};
?>
	</div>
	
</body>

</html>