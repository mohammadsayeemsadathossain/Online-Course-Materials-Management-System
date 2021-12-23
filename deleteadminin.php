<?php


$con=mysqli_connect('localhost','root');
	 mysqli_select_db($con,'project');
	 
	 $id=$_GET["ID"];
	 $s="DELETE from instructor where ID=$id";
	 $q=mysqli_query($con,$s);
	if($q)
	 header('location:adminpanel.php');

?>

