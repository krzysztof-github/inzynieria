<?php
session_start();

	if($_SESSION["login"]) {
require_once "connect.php";

$conn = @new mysqli($host, $db_login, $db_password, $db_name);

$data=$_POST['data'];
$sql = "UPDATE DANE SET DATA=$data WHERE login='" . $_SESSION["login"] . "'";
if (mysqli_query($conn, $sql)) {
echo json_encode(array("statusCode"=>200));
}
else {
echo json_encode(array("statusCode"=>201));
}
    }

$conn->close();
?>