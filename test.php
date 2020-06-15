<?php
session_start();
if($_SESSION["login"]) { echo $_SESSION["login"];
?>
<!doctype html>
<html>

<head>
	<?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "uzytkownik";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $query = "SELECT * FROM data";
        $result1 = mysqli_query($connect, $query);
        ?>

</head>

<body>
   <article>
        
                <form action="" method="POST">
                        
                <select name="menu">
                        
                
                <?php while($row1 = mysqli_fetch_array($result1)):;?>
                
                <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
                
                
                <?php endwhile;?>
                
                </select>

                <input type="submit" name="insert" value="dodaj"/>
                </form>
                <?php

        if(isset($_POST['insert']))
        {
                $nazwa=$_POST['menu'];
                $sql="INSERT INTO dane(menu) SELECT menu FROM data WHERE login='" . $_SESSION["login"] . "'";
                $query_run=mysqli_query($connect,$query);
                
                if($query_run)
                {echo ' <script type="text/javascript">alert("dodano")</script>';
                }else
                {echo ' <script type="text/javascript">alert(" nie dodano")</script>';
                
                }
        }

 
?>
  </article>
  </body>
  </html>

  
                

<?php
		}else 
		{
			header('Location: logowanie.php');
                };
?>