<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "produkty";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `data`";
$result1 = mysqli_query($connect, $query);
?>
<form action="" method="POST">
        <select name="Nazwa">
 
<?php while($row1 = mysqli_fetch_array($result1)):;?>
 
<option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
 
 
<?php endwhile;?>
 
</select>
<input type="submit" name="insert" value="dodaj">
</form>
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'nowa');
 
if(isset($_POST['insert']))
{
   $Nazwa=$_POST["Nazwa"];
  $query="INSERT INTO 'zapisane'('Nazwa') VALUES('$Nazwa')";
  $query_run=mysqli_query($connection,$query);
}
if($query_run)
{echo ' <script type="text/javascript">alert("dodano")</script>';
}else
{echo ' <script type="text/javascript">alert(" nie dodano")</script>';
 
}
 
?>