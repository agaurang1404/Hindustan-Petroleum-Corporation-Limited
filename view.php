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
$sql = "SELECT * FROM laptop WHERE Emp_No = $id";
$result = $mysqli->query($sql);
//redirecting the admin to index.php
$fsql = "SELECT * FROM user WHERE Emp_No = $id";
$fresult = $mysqli->query($fsql);
$frow = $fresult->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>HPCL</title>
	<link rel="stylesheet" type="text/css" href="stylea.css">
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
	<li><a href="create.php">CREATE NEW<br>ACCOUNT</a></li>
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
	<div style="clear:both;"></div>
	</marquee>
	<br>
<center><fieldset>
<legend>ADMIN VIEW STATUS</legend>
<table width='100%' border=0 align="center">

	<tr bgcolor="green">
		<th>Employee Number</th>
		<th>Name</th>
		<th>Serial Number</th>
		<th>Received</th>
		<th>Location Code</th>
		<th>Employee Code</th>
		<th>Employee Designation</th>
		<th>Comments</th>
		<th>Uploaded-File Name</th>
	</tr>
	<?php while($row = $result->fetch_assoc()): ?>
		<?php
			echo "<tr>";
			echo "<td>".$row['Emp_No']."</td>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Serial_No']."</td>";
			echo "<td>".$row['Received']."</td>";
			echo "<td>".$row['Loc_Code']."</td>";
			echo "<td>".$row['Emp_Code']."</td>";
			echo "<td>".$row['Emp_Design']."</td>";
			echo "<td>".$row['Comments']."</td>";
			echo "<td>","<a href=\"Viewf.php?id=$row[Emp_No]\" target=\"_blank\">",$frow['File_Name'],"</a>","</td>"; 
			?>
	<?php endwhile; ?>
</table>
</fieldset><center>
</div>
<div style="clear:both;"></div>
</body>
</html>
