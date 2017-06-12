<?php include "config.php"; ?>
<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])) {
	header("Location:error.php");
}else {
	$name = $_SESSION['user'];
}
$id = $_GET['id'];
//sql query
$sql = "DELETE FROM laptop WHERE Emp_No=$id";
$result = $mysqli->query($sql);
//redirecting the admin to index.php
header("Location:admin.php");
?>