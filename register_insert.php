<?php
$fn = $_POST["firstName"];
$ln = $_POST["lastName"];
$em = $_POST["email"];
$age = $_POST["age"];
$mobile = $_POST["mobile"];

$con = mysqli_connect("localhost","root","") or die (" can not establish connection ");
mysqli_select_db($con,"products") or die (" can not select db ");

$statment1= "insert into  customer (firstname,lastname,email,age,mobile) 
	values('$fn','$ln','$em','$age','$mobile')";
	
$flag =mysqli_query($con,$statment1);
if ($flag)
{
	include("cart.php");
}
else
{
	die ("Error: ".mysqli_error($con));
}
?>