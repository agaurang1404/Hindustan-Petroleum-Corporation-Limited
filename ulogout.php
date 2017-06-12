<?php
session_start();
if (isset($_SESSION['user1']) && isset($_SESSION['pass1'])) {
	unset($_SESSION['user1']);
	unset($_SESSION['pass1']);
	header("Location:index.php");
}
else {
	header("Location:error1.php");
}
?>