<?php

session_start();
$con=mysqli_connect('localhost','root');
	 mysqli_select_db($con,'project');

?>

<!doctype html>
<html lang="en">
  <head>
  <title>Student Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  
  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" ><h1>Student Panel</h1></a>
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" ><h2>Department</h2> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
         <button type="button" class="btn btn-primary" ><h1>  <?php  $displayquery="SELECT * FROM student";
			 $querydisplay=mysqli_query($con,$displayquery);
			  while($result=mysqli_fetch_array($querydisplay)){
				  
				   ?>
				 
				 
				<?php 
			  if($result['ID']==$_SESSION['user']) { echo $result['Department']; }
			  
			  
			  ?></h1>  <?Php }
			  
			  
			  
			  ?></button>
      </li>
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
    
      <button class="btn btn-outline-success my-1 my-sm-0" ><h1> welcome <?php  $displayquery="SELECT * FROM student";
			 $querydisplay=mysqli_query($con,$displayquery);
			  while($result=mysqli_fetch_array($querydisplay)){
				  
				   ?>
				 
				 
				<?php 
			  if($result['ID']==$_SESSION['user']) { echo $result['Name']; }
			  
			  
			  ?></h1>  <?Php }
			  
			  
			  
			  ?></button>
			  <li class="nav-item">
			  <a href="logout.php" class="btn btn-danger">Logout</a>


			  </li>
			  
    </form>
  </div>
</nav>
<div class="alert alert-secondary" role="alert">
   Download Contents of EEE->  <a href="downloadeee.php" class="alert-link">click here</a>
</div>
<div class="alert alert-success" role="alert">
  Download Contents of CSE -> <a href="download.php" class="alert-link">click here</a>
</div>
<div class="alert alert-danger" role="alert">
   Download Contents of BBS -> <a href="downloadbbs.php" class="alert-link">click here</a>
</div>


  </body>
  
  </html>
