<?php include "config.php"; ?>
<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])) {
	header("Location:error.php");
}else {
	$name = $_SESSION['user'];
}
if (isset($_POST['update'])) {
	$empno = $_POST['empno'];
	$name = $_POST['name'];
	$srno = $_POST['srno'];
	$recv = $_POST['recv'];
	$lcode = $_POST['lcode'];
	$empcode = $_POST['empcode'];
	$empdsgn = $_POST['empdsgn'];
	$cmts = $_POST['cmts'];
	//sql query
	$sql = "UPDATE student SET Emp_No='$empno',Name='$name',Serial_No='$srno',Received='$recv',Loc_code='$lcode',Emp_Code='$empcode',Emp_Design='$empdsgn',Comments='$cmts' WHERE Emp_No=$empno";
	$result = $mysqli->query($sql);
	//redirecting the user to index.php
	header("Location:admin.php");
}
?>
<?php
//echo
$id = $_GET['id'];

//selecting data associated with this particular id
$sqlc = "SELECT * FROM laptop WHERE Emp_no=$id";
$resultc = $mysqli->query($sqlc);
while($row = $resultc->fetch_assoc())
{
	$empno = $row['Emp_No'];
	$name = $row['Name'];
	$srno = $row['Serial_No'];
	$recv = $row['Received'];
	$lcode = $row['Loc_Code'];
	$empcode = $row['Emp_Code'];
	$empdsgn = $row['Emp_Design'];
	$cmts = $row['Comments'];
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
	<li><a href="admin.php">ADMIN PANEL</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
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
	<legend>ADMIN EDIT PANEL</legend>
<center><form name="form1" method="post" action="edit.php">
		<table border="0" cellspacing="10">
			<tr> 
				<td><label>Employee Number :</label></td>
				<td><input type="text" name="empno" placeholder="<?php echo $empno;?>"></td>
			</tr>
			<tr> 
				<td><label>Name :</label></td>
				<td><input type="text" name="name" placeholder="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td><label>Serial Number :</label></td>
				<td><input type="text" name="srno" placeholder="<?php echo $srno;?>"></td>
			</tr>
			<tr> 
				<td><label>Received :</label></td>
				<td><select name="recv">
					<option value="Y">Yes</option>
					<option value="N">No</option>
					<option value="U">Unknown</option>
				</select></td>
			</tr>
			<tr> 
				<td><label>Location Code :</label></td>
				<td><input type="text" name="lcode" placeholder="<?php echo $lcode;?>"></td>
			</tr>
			<tr> 
				<td><label>Employee Code :</label></td>
				<td><input type="text" name="empcode" placeholder="<?php echo $empcode;?>"></td>
			</tr>
			<tr> 
				<td><label>Employee Designation :</label></td>
				<td><input type="text" name="empdsgn" placeholder="<?php echo $empdsgn;?>"></td>
			</tr>
			<tr> 
				<td><label>Comments :</label></td>
				<td><input type="text" name="cmts" placeholder="<?php echo $cmts;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></</td>
				<td><input type="submit" name="update" value="Update"></td>
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
