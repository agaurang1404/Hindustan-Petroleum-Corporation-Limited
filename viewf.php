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
$sql = "SELECT * FROM user where Emp_No = $id";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
header("Location:$row[File_Path]");
//echo $row['File_Path'];
//downloading file 
?>
