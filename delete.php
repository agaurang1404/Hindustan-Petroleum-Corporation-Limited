<?php include "config.php"; ?>
<?php
//echo
$id = $_GET['id'];
//sql query
$sql = "DELETE FROM laptop WHERE Emp_No=$id";
$result = $mysqli->query($sql);
//redirecting the admin to index.php
header("Location:admin.php");
?>