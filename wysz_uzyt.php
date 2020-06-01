<?php
session_start();
if(isset($_POST['search']))
{
    $valueToSearch=$_POST['valueToSearch'];
    $query="SELECT * FROM `data` WHERE CONCAT(`Nazwa`, `kalorie`, `bialko`, `tluszcz`, `weglowodany`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}else{
    $query="SELECT * FROM `data`";
    $search_result=filterTable($query);
}
function filterTable($query)
{ 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connect=mysqli_connect("localhost","root","","produkty");
    $filter_Result=mysqli_query($connect,$query);
    return $filter_Result;
}
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Przykładowy tytuł</title>
	<link rel="stylesheet" href="style.css">
	
</head>

<body>
<?php
		if($_SESSION["login"]) { ?>
	<div id="top">
		<header class="NAGLOWEK">
			<nav id="MENU">
				<ul>
                    <li><a href="logout.php">Wyloguj</a></li>
					<li><a href="wyszukiwarka.php">Produkty</a></li>
					<li><a href="kalkulator.php">Kalkulator</a></li>
					<li><a href="paneluzytkownika.php">Konto</a></li>
				</ul>
			</nav>
		</header>
		<article>
    <form action="wysz_uzyt.php" method="post"> 
        <input type="text" name="valueToSearch" placeholder="Wpisz nazwę">
        <input type="submit" name="search" value="Szukaj"><br><br>
       
       
        <table class="table">
            <tr>
         <td class="kolumna">NAZWA</td>
   <td  class="kolumna">KALORIE</td>
   <td  class="kolumna">BIAŁKO</td>
   <td class="kolumna">TŁUSZCZ</td>
   <td  class="kolumna">WĘGLOWODANY</td>
            </tr>

            <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                <td class="kolumna"><?php echo $row['Nazwa'];?></td> 
                <td><?php echo $row['kalorie'];?></td>  
                    <td><?php echo $row['bialko'];?></td> 
                    <td><?php echo $row['tluszcz'];?></td> 
                    <td><?php echo $row['weglowodany'];?></td> 
                </tr>
            <?php endwhile;?>
            
        </table>
           
    </form>


		</article>
		<footer id="STOPKA"></footer>
	</div>
    <?php
		}else 
		{
			header('Location: logowanie.php');
		};
		?>
	
</body>

</html>
