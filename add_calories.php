<?php
session_start();
if ($_SESSION["login"]) {
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>BeFit</title>
	<link rel="stylesheet" href="style.css">

</head>

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "uzytkownik";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT kalorie FROM `data`";
$result1 = mysqli_query($connect, $query);

if(isset($_POST['insert']))
{
  if (isset($_POST['insert'])) {
    $kalorie = $_POST["kalorie"];
    $query2 = "UPDATE DANE SET kalorie='$kalorie' WHERE login='" . $_SESSION["login"] . "'";
    $query_run = mysqli_query($connect, $query2);
  
    if ($query_run) {
      echo ' <script type="text/javascript">alert("dodano")</script>';
    } else {
      echo ' <script type="text/javascript">alert(" nie dodano")</script>';
    }
  }
}

?>
<body>
<form action="" method="POST">
  <select   name="kalorie">

    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>

      <option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>


    <?php endwhile; ?>

  </select>
  <input type="submit" name="insert" type="submit" value="dodaj">
</form>
</body>
</html>
<?php
		} else {
			header('Location: logowanie.php');
		};
?>