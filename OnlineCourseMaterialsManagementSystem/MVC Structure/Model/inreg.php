<?php

session_start();

// Create connection
$conn = new mysqli('localhost', 'root', '');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_select_db($conn,'project');



$name=$_POST['name'];

$id= $_POST['id'];

$department=$_POST['department'];

$initial=$_POST['initial'];

$account_type=$_POST['type'];

$pass=$_POST['password'];

$s="select * from account where ID='$id'";

$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);

if ($num==1){
echo "duplicate ID no.";

}else{
$reg="INSERT INTO instructor (Name, ID,Department,Initial,Account_Type,Password) VALUES ('$_POST[name]','$_POST[id]','$_POST[department]','$_POST[initial]','$_POST[type]','$_POST[password]')";

mysqli_query($conn,$reg);

$acc= "INSERT INTO account(Account_Type,Instructor_ID,ID) VALUES('$_POST[type]','$_POST[id]','$_POST[id]')";
mysqli_query($conn,$acc);

$dep="insert into department (Name) values ('$_POST[department]')";
mysqli_query($conn,$dep);
 header('location:project.html');
}

?>