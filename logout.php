<?php
session_start();
if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
	header("Location:index.php");
}
else {
	header("Location:error.php");
}
?>