<?php

session_start();
$con=mysqli_connect('localhost','root');
	 mysqli_select_db($con,'project');

?>

<!doctype html>
<html lang="en">
  <head>
  <title>admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  
  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="logo1.png" class="d-block w-1" alt="...">
  <a class="navbar-brand" ><h1>ADMIN Panel</h1></a>
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" ><h2>BRAC University</h2> <span class="sr-only">(current)</span></a>
      </li>

      
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
    
      <button class="btn btn-outline-success my-1 my-sm-0" ><h1> welcome <?php  $displayquery="SELECT * FROM admin";
			 $querydisplay=mysqli_query($con,$displayquery);
			  while($result=mysqli_fetch_array($querydisplay)){
				  
				   ?>
				 
				 
				<?php 
			  if($result['ID']==$_SESSION['name']) { echo $result['Name']; }
			  
			  
			  ?></h1>  <?Php }
			  
			  
			  
			  ?></button>
			  <li class="nav-item">
			  <a href="logout.php" class="btn btn-danger">Logout</a>


			  </li>
			  
    </form>
  </div>
</nav>

<div class="container">
<h1 class="text-center text-white bg-dark">Contents of all Dept.</h1>
<br>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
<thead>
   <th>Content ID</th>
   <th>Content Name</th>
   <th>Dept</th>
   <th> Content</th>
  
   <th>Download</th>
  <th>Delete</th>
  
</thead>
<tbody>
<?php

     $con=mysqli_connect('localhost','root');
	 mysqli_select_db($con,'project');
	  $displayquery="SELECT * FROM content";
			 $querydisplay=mysqli_query($con,$displayquery);
			  while($result=mysqli_fetch_array($querydisplay)){
				 
				 ?>
				 <tr>
                      <td><?php echo $result['content_id']; ?></td>		
                      <td><?php echo $result['content_name']; ?></td>	
					    <td><?php echo $result['course_name']; ?></td>
                      <td><img src=" <?php echo $result['content_dir']; ?>" height="100px" width="100px"</td>	 
				       <td><a href="<?php echo $result['content_dir'];?>" > <?php echo $result['content_dir']; ?></a></td>
	              <td><a href="deleteadmin.php?content_id= <?php echo $result['content_id'];?>"> <?php echo $result['content_id']; ?></a></td>
				 
				 </tr>
				 
				<?php 
			 }
			 
		 
?>

</tbody>

</table>
</div>
</div>

<div class="container">
<h1 class="text-center text-white bg-dark">Students</h1>
<br>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
<thead>
   <th>Student Name</th>
   <th>Student ID</th>
  
  <th>Department</th>
    <th>Delete</th>
	  <th>Update info</th>
  
</thead>
<tbody>
<?php

     $con=mysqli_connect('localhost','root');
	 mysqli_select_db($con,'project');
	 
	 
	 
	  $displayquery="SELECT * FROM student";
			 $querydisplay=mysqli_query($con,$displayquery);
			  while($result=mysqli_fetch_array($querydisplay)){
				 
				 ?>
				 <tr>
                      <td><?php echo $result['Name']; ?></td>		
                      <td><?php echo $result['ID']; ?></td>	
                      	 
				      <td><?php echo $result['Department']; ?></td>
			<td><a href="deleteadminst.php?ID= <?php echo $result['ID'];?>"> <?php echo $result['ID']; ?></a></td>
                      <td><a href="updateadminst.php?ID= <?php echo $result['ID'];?>"><?php echo $result['ID']; ?></td>			
				 </tr>
				 
				<?php 
			 }
			 
		 
?>

</tbody>

</table>
</div>
</div>

<div class="container">
<h1 class="text-center text-white bg-dark">Instructors</h1>
<br>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
<thead>
   <th>Instructor's Name</th>
   <th>Instructor's ID</th>
  <th>Instructor's Initial</th>
  <th>Department</th>
    <th>Delete</th>
	  <th>Update info</th>
  
</thead>
<tbody>
<?php

     $con=mysqli_connect('localhost','root');
	 mysqli_select_db($con,'project');
	 
	 
	 
	  $displayquery="SELECT * FROM instructor";
			 $querydisplay=mysqli_query($con,$displayquery);
			  while($result=mysqli_fetch_array($querydisplay)){
				 
				 ?>
				 <tr>
                      <td><?php echo $result['Name']; ?></td>		
                      <td><?php echo $result['ID']; ?></td>	
                      	 <td><?php echo $result['Initial']; ?></td>	
				      <td><?php echo $result['Department']; ?></td>
			<td><a href="deleteadminin.php?ID= <?php echo $result['ID'];?>"> <?php echo $result['ID']; ?></a></td>	 
				 <td><a href="updateadminin.php?ID=<?php echo $result['ID'];?>"><?php echo $result['ID']; ?></td>
				 </tr>
				 
				<?php 
			 }
			 
		 
?>

</tbody>

</table>
</div>
</div>
  </body>
  
  </html>
