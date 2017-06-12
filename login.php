<?php include "config.php"; ?>
<?php
//echo 
if (isset($_POST['login'])) {
	session_start();
	$_SESSION['user'] = $_POST['name'];
	$_SESSION['pass'] = $_POST['password'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$type = "admin";
	//sql query
	$sql = "SELECT * FROM users WHERE Username ='$name'";
	$result = $mysqli->query($sql);
	//fetching user details
	$row = $result->fetch_assoc();
	if ($name == $row['Username'] && $password == $row['Password'] && $type == $row['Type']) {
			header("Location:admin.php");
	}
	if ($name != $row['Username'] && $password != $row['Password'] && $type != $row['Type']) {
			echo "<script>";
			echo "alert('Admin Not Valid')";
			echo "</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN</title> 
	<style>
		fieldset {
			width: 30%;
			text-align: center;
			border: 2px solid #002266;
    		border-radius: 4px;
    		background-color: #f1f1f1;
		} 
		input[type=text] {
    		border: 2px solid #002266;
    		border-radius: 4px;
    		color: #002266;
		}
		input[type=password] {
    		border: 2px solid #002266;
    		border-radius: 4px;
    		color: #002266;
		}
		legend {
			background-color: #002266;
			color: white;
		}
		label {
			color: #002266;
		}
		input[type=submit] {
    		color: white;
    		background-color: #002266
		}
		input[type=submit]:hover {
    		background-color: #002233;
		}
		footer {
	bottom: 0;
	width: 100%;
	position: fixed;
	background-color: #002266;
	color: white;
	text-align: center;
}
	</style>
	<script>
		function validateform() {
			var x = document.loginform.name.value;
			var y = document.loginform.password.value;
			var m = x.length;
			var n = y.length;
			 var regexp = /^[A-Z]/; // expression for checking first character as upper case 
			 var regex = /^[a-zA-Z0-9!@#\$%\^\&*\)\(+=._-]+$/ // regular expression for checking use of special characters
			 var regexl = /[@]$/ // expression to check last character as @
			if (x == "" || m>20 || regexp.test(x) || regexl.test(x) || y == "" || n>20 || regexl.test(y)) {
				if (x == "" || y == "") {
					/*if (x == "" && y =="") {
						alert("Please Check the fields, Login Credentials Cannot be empty");
					}*/
					if (x == "") {
						alert ("Please Fill the Username, It cannot be empty");
						//document.getElementById("password").innerHTML = "";
						return false
					}	
					if (y == "") {
						alert ("Please Fill the Password, It cannot be empty");
						//document.getElementById("name").innerHTML = "";
						return false
					}		
				}
				if (m>20 || n>20) {
					if (m>20) {
						alert ("Username cannot be greater than 20 characters");
						document.getElementById("name").innerHTML = "";
						return false
					}
					if (n>10) {
						alert ("Password cannot be greater than 10 characters");
						document.getElementById("password").innerHTML = "";
						return false
					}
					
				}
				if (regexp.test(x)) {
				alert ("Username cannot start with Upper case Character");
				document.getElementById("name").innerHTML = "";
				return false	
				}
				if (regexl.test(x) || regexl.test(y)) {	
					if (regexl.test(x)) {
						alert ("Username cannot end with Special Character");
						document.getElementById("name").innerHTML = "";
						return false
					}
					if (regexl.test(y)) {
						alert ("Password cannot end with Special Character");
						document.getElementById("password").innerHTML = "";
						return false
					}	
				}
			}
		}
	</script>
</head>
<body>
<div id="logo" style="top:0; position: fixed; width: 100%; background-color: #f1f1f1; text-align: center;">
	<center><img src="hpcl_logo.png" alt="Welcome to HPCL"></center>
	<hr width="100%" size="40px" style="background-color: #002266; margin-bottom: 0%">
</div>
<div style="margin-top: 10%;">
	<marquee style="background-color: #002266; color: white; position: fixed;" loop=0 scroll="slide">
	<div style="width:100%;border:0px solid #000;">
	<div style="float:left; width:40%">Hindustan Petroleum Corporate Limited</div>
	<div style="float:left; width:10%"></div>
	<div style="float:left; width:40%">Hindustan Petroleum Corporate Limited</div>
	</marquee> 
</div>
<br>
<div style="margin-top: 5%; width: 100%;">
<center><fieldset>
		<legend>LOGIN TO PROCEED</legend>
		<center><form method="post" action="login.php" name="loginform" onsubmit="return validateform()">
			<table border="0" cellspacing="10" cellpadding="10">
				<tr>
					<td><label>Username :</label></td>
					<td><input type="text" name="name" placeholder="Enter username"></td>
				</tr>
				<!--next level -->
				<tr>
					<td><label>Password :</label></td>
					<td><input type="password" name="password" placeholder="Enter password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="login" value="LOGIN"></td>

				</tr>
			</table>
	</form></center>
</fieldset></center>
</div>
<footer>
	Copyrights reserved by HPCL 
</footer>
</body>
</html>