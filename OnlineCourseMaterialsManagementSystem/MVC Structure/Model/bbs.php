
<!doctype html>
 <head> 
 <title>BBS File Upload</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
 
 </head>

<body>
<form action="upload.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="name">Content Name</label>
    <input type="text" class="form-control" name="name" id="name" required>
    
  </div>
   <div class="form-group">
    <label for="course">Course</label>
    <select class="form-control" name="course" required>
      <option>BBS</option>
    
      
    </select>
  </div>
  <div class="form-group">
    <label for="file">File</label>
    <input type="file" class="form-control" name="file" id="file" required>
    
  </div>

  <input type="submit" name="submit" value="upload" class ="btn btn-success">
  


</form>

</body>

</html>