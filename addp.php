<?php include 'config.php'; ?>
<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])) {
	header("Location:error.php");
}else {
	$name = $_SESSION['user'];
}
//initializing values
	$empno = $_POST['empno'];
	$name = $_POST['name'];
	$srno = $_POST['srno'];
	$recv = $_POST['recv'];
	$lcode = $_POST['lcode'];
	$empcode = $_POST['empcode'];
	$empdsgn = $_POST['empdsgn'];
	$cmts = $_POST['cmts'];
$sql = "INSERT INTO laptop (Emp_No, Name, Serial_No, Received, Loc_Code, Emp_Code, Emp_Design, Comments) VALUES ($empno,'$name','$srno','$recv','$lcode','$empcode','$empdsgn','$cmts')";
$result = $mysqli->query($sql);
//pdf insert query 
//if(isset($_POST['insert']))
//{
    //storing all necessary data into the respective variables.
$empno = $_POST['empno'];
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_tmp = $file ['tmp_name'];
$target = "images/";
$file_path = $target.$file_name;

//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 

if($file_name!="" && ($file_type="application/pdf"/*||$file_type="image/png"||$file_type="image/gif"*/)&& $file_size<=614400)

if(move_uploaded_file ($file_tmp,$file_path))//"images" is just a folder name here we will load the file.
$query="insert into user(Emp_No,File_Name,File_Path)values($empno,'$file_name','$file_path')";
$result = $mysqli->query($query);
header("Location:add.php");
?>