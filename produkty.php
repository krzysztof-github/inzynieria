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
					<li><a href="wyszukiwarka.php">Produkty</a></li>
					<li><a href="kalkulator.php">Kalkulator</a></li>
					<li><a href="logowanie.php">Logowanie</a></li>
					<li><a href="przyklad.php">BeFit</a></li>
				</ul>
			</nav>
		</header>
		<article>
		<?php


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

            while($row = mysqli_fetch_array($result)) {
                echo $row['Nazwa']. ' ' . $row['kalorie']. ' ' . $row['bialko']. ' ' . $row['tluszcz']. ' ' . $row['weglowodany']. '<br>';
              }

              for ($page=1;$page<=$number_of_pages;$page++) {
                echo '<a href="produkty.php?page=' . $page . '">' . $page . '</a> ';
              }

            ?>
		</article>
		<footer id="STOPKA"></footer>
	</div>
	
</body>

</html>