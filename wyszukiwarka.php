﻿<?php
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
    $connect=mysqli_connect("localhost","root","","csv_db 6");
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
	<div id="top">
		<header class="NAGLOWEK">
			<nav id="MENU">
				<ul>
					<li><a href="produkty.html">Produkty</a></li>
					<li><a href="kalkulator.html">Kalkulator</a></li>
					<li><a href="logowanie.html">Logowanie</a></li>
					<li><a href="przyklad.html">BeFit</a></li>
				</ul>
			</nav>
		</header>
		<article>
    <form action="wyszukiwarka.php" method="post"> 
        <input type="text" name="valueToSearch" placeholder="Szukaj produktow"><br><br>
        <input type="submit" name="search" value="Szukaj"><br><br>
        <table>
            <tr>
         <td>Nazwa</td>
   <td>Kalorie</td>
   <td>Białko</td>
   <td>Tłuszcz</td>
   <td>Węglowodany</td>
            </tr>
            <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                <td><?php echo $row['Nazwa'];?></th>
                    <th><?php echo $row['bialko'];?></th>
                    <th><?php echo $row['tluszcz'];?></th>
                    <th><?php echo $row['weglowodany'];?></th>
                </tr>
            <?php endwhile;?>
        </table>
    </form>


		</article>
		<footer id="STOPKA"></footer>
	</div>
	
</body>

</html>
