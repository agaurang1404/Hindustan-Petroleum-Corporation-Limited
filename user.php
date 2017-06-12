<?php include "config.php"; ?>
<?php
//echo
//sql query
$sql = "SELECT * FROM laptop ORDER BY Emp_No DESC";
$result = $mysqli->query($sql);
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
</ul>
</div>
<!--<div style="float:left; width:1%; background:#fff; height:100%; margin-top: 7.5%;"></div>-->
<div style="float:left; width:86%; background:#fff; height:100%; margin-top: 0%; margin-left:10%">
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
<legend>EMPLOYEE VIEW</legend>
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
			echo "<td><a href=\"uview.php?id=$row[Emp_No]\"><img src='vallbtn.png' alt='view' width='80px' height='40px'></a> |<a href=\"uviewg.php?id=$row[Comments]\"><img src='grbtn.png' alt='view' width='80px' height='30px'></a></td>";   
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
