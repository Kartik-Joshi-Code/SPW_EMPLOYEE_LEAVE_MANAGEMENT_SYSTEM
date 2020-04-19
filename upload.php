<?php
 session_start();
error_reporting(0);
include('includes/config.php');







if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
$eid=$_SESSION['emplogin'];



$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(isset($_POST["submit"]))
{$NAME=$_POST["submit"];
$pname = rand(1000,10000)."-".$_FILES["submit"]["name"]);
$tname= $_FILES["submit"]["tmp_name"]);
$uploads_dir = "uploads/";
move_uploaded_file($tname, $uploads_dir.'/'.$pname);
$sql = "INSERT INTO tblleaveapplication (NAME) VALUES ('$NAME')";
if(mysqli_query($conn,$sql)){
	echo "FILE UPLOADED";
} else {echo "error";}
?>