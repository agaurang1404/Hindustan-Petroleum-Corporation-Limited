<?php include "config.php"; ?>
<?php
//echo
if (isset($_POST['create'])) {
	$name = $_POST['name'];
	$password = $_POST['password'];
	$type = $_POST['type'];
	//sql query
	$sql = "INSERT INTO users(Username,Password,Type) VALUES('$name','$password','$type')";
	$result = $mysqli->query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HPCL</title>
	<link rel="stylesheet" type="text/css" href="stylea.css">
	<style>
		input[type=text] {
    		border: 2px solid #002266;
    		border-radius: 4px;
    		color: white;
		}
		input[type=text]:focus {
    		background-color: #002266;
		}
		input[type=text]:hover {
    		background-color: #002266;
		}
		input[type=password] {
    		border: 2px solid #002266;
    		border-radius: 4px;
    		color: white;
		}
		input[type=password]:focus {
    		background-color: #002266;
		}
		input[type=password]:hover {
    		background-color: #002266;
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
	</style>
</head>
<body>
<div id="logo">
	<center><img src="hpcl_logo.png" alt="Welcome to HPCL"></center>
</div>
<div style="width:100%;border:0px solid #000;">
<div id="nav_bg" style="float:left; width:13%; background-color:#002233; height:100%; margin-top: 7.5%;">
<ul>
	<li><a href="index.php">SIGN OUT</a></li>
	<li><a href="add.php">ADD NEW DATA</a></li>
	<li><a href="admin.php">ADMIN PANEL</a></li>
</ul>
</div>
<!--<div style="float:left; width:1%; background:#fff; height:100%; margin-top: 7.5%;"></div>-->
<div style="float:left; width:86%; background:#fff; height:100%; margin-top: 0%; margin-left:12.7%">
	<marquee style="background-color: #002266; color: white; position: fixed;" loop=0 scroll="slide">
	<div style="width:100%;border:0px solid #000;">
	<div style="float:left; width:40%">Hindustan Petroleum Corporate Limited</div>
	<div style="float:left; width:10%"></div>
	<div style="float:left; width:40%">Hindustan Petroleum Corporate Limited</div>
	</marquee>
	<br>
<br>
<br>
<br>
<div id="form" style="margin-top: -4%; padding-bottom: 10%; background-color: #f1f1f1;">
<fieldset>
	<legend>CREATE NEW ACCOUNT - SIGNUP</legend>
		<center><form method="post" action="create.php" name="loginform">
			<table border="0" cellspacing="10" cellpadding="10">
				<tr>
					<td><label>Username :</label></td>
					<td><input type="text" name="name" placeholder="Enter username"></td>
				</tr>
				<!--next level -->
				<tr>
					<td><label>Password :</label></td>
					<td><input type="text" name="password" placeholder="Enter password"></td>
				</tr>
				<!-- next level -->
				<tr>
					<td><label>Type :</label></td>
					<td><select name="type">
						<option value="user">USER</option>
						<option value="admin">ADMIN</option>
					</select></td>
				</tr>
				<!-- next level -->
				<tr>
					<td><?php echo "<input type='submit' name='create' value='CREATE' onclick=\"return confirm('Are you want to create this user?')\">"; ?></td>
				</tr>
			</table>
	</form></center>
</fieldset>
</div>
</div>
<footer>
	Copyrights reserved by HPCL 
</footer>
</body>
</html
