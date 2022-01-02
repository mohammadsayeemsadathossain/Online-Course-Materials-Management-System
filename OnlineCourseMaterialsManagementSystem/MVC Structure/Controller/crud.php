<!doctype html>
 <head> 
 <title>File Upload</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
 
 </head>

<body>
<div class="container">
<h1 class="text-center text-white bg-dark">Delete Operation</h1>
<br>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
<thead>
   <th>Content ID</th>
   <th>Content Name</th>
   <th> Content</th>
  
   <th>Download</th>
  <th>Delete</th>
  
</thead>
<tbody>
<?php
session_start();
     $con=mysqli_connect('localhost','root');
	 mysqli_select_db($con,'project');
	  $displayquery="SELECT * FROM content";
			 $querydisplay=mysqli_query($con,$displayquery);
			  while($result=mysqli_fetch_array($querydisplay)){
				 
				 ?>
				 <tr>
                      <td><?php echo $result['content_id']; ?></td>		
                      <td><?php echo $result['content_name']; ?></td>	
                      <td><img src=" <?php echo $result['content_dir']; ?>" height="100px" width="100px"</td>	 
				       <td><a href="<?php echo $result['content_dir'];?>" > <?php echo $result['content_dir']; ?></a></td>
	              <td><a href="delete.php?content_id= <?php echo $result['content_id'];?>"> <?php echo $result['content_id']; ?></a></td>
				 
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