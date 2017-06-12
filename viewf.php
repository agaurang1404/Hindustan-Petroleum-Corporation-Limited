<?php include "config.php"; ?>
<?php
//echo
$id = $_GET['id'];
//sql query
$sql = "SELECT * FROM user where Emp_No = $id";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
header("Location:$row[File_Path]");
//echo $row['File_Path'];
//downloading file 
?>
