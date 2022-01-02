<?php


$con=mysqli_connect('localhost','root');
	 mysqli_select_db($con,'project');
	 
	 $id=$_GET["content_id"];
	 $s="DELETE from content where content_id=$id";
	 $q=mysqli_query($con,$s);
	if($q)
	 header('location:instructorpanel.php');

?>


