<?php include 'config.php'; ?>
<?php
//echo
$id = $_GET['id'];
//sql query
$sql = "SELECT * FROM laptop WHERE Emp_No=$id";
$result = $mysqli->query($sql);
//redirecting the admin to index.php
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
	<li><a href="user.php">USER PANEL</a></li>

</ul>
</div>
<!--<div style="float:left; width:1%; background:#fff; height:100%; margin-top: 7.5%;"></div>-->
<div style="float:left; width:86%; background:#fff; height:100%; margin-top: 0%; margin-left:12%">
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
<div id="form" style="margin-top: -4%; padding-bottom: 10%; background-color: #fff;">
<fieldset style="background-color: #f1f1f1; text-align: center;">
<legend style="background-color: #002266; color: white;">EMPLOYEE VIEW STATUS</legend>
<table width='100%' border=0 align="center">

	<tr bgcolor="#002266" style="color: white;">
		<th>Employee Number</th>
		<th>Name</th>
		<th>Serial Number</th>
		<th>Received</th>
		<th>Location Code</th>
		<th>Employee Code</th>
		<th>Employee Designation</th>
		<th>Comments</th>
	</tr>
	<center><?php while($row = $result->fetch_assoc()): ?>
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
		?></center>
	<?php endwhile; ?>
</table>
</fieldset>
</div>
</div>
<footer>
	Copyrights reserved by HPCL 
</footer>
</body>
</html