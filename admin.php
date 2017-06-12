<?php include "config.php"; ?>
<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])) {
	header("Location:error.php");
}else {
	$name = $_SESSION['user'];
}

//echo
//sql query
$sql = "SELECT * FROM laptop ORDER BY Emp_No DESC";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logged In As : <?php echo "$name"; ?></title>
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
<legend>ADMIN OPERATIONS</legend>
<table width='100%' border=0 align="center">

	<tr bgcolor="#002266" style="color: white;">
		<th>Employee NUmber</th>
		<th>Name</th>
		<th>Serial No</th>
		<th>Update</th>
	</tr>
	<center><?php while($row = $result->fetch_assoc()): ?>
		<?php
			echo "<tr>";
			echo "<td>".$row['Emp_No']."</td>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Serial_No']."</td>";
			echo "<td><a href=\"View.php?id=$row[Emp_No]\"><img src='vallbtn.png' alt='view' width='80px' height='40px'></a> |<a href=\"edit.php?id=$row[Emp_No]\"><img src='udbtn.png' alt='view' width='80px' height='30px'></a> | <a href=\"delete.php?id=$row[Emp_No]\" onClick=\"return confirm('Are you sure you want to delete?')\"><img src='dltbtn.png' alt='view' width='80px' height='30px'></a></td>";   
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