<?php

session_start();

// Create connection
$conn = new mysqli('localhost', 'root', '');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_select_db($conn,'project');





$id= $_POST['id'];

//$department=$_POST['department'];

$pass=$_POST['password'];

$s="select * from instructor where ID='$id' && Password='$pass'";
$s1="select * from student where ID='$id' && Password='$pass'";
$s2="select * from admin where ID='$id' && Password='$pass'";



$result=mysqli_query($conn,$s);
$result1=mysqli_query($conn,$s1);
$result2=mysqli_query($conn,$s2);


$num=mysqli_num_rows($result);
$num1=mysqli_num_rows($result1);
$num2=mysqli_num_rows($result2);




if ($num==1){
	$_SESSION['username']=$id;
	 header('location:instructorpanel.php');

}else if ($num1==1){
	$_SESSION['user']=$id;
 header('location:studentpanel.php');

}else if ($num2==1){
	$_SESSION['name']=$id;
 header('location:adminpanel.php');

}
else{
 echo "Wrong Information";
}

?>