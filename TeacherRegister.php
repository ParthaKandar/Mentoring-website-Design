<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
</head>
<body>

	
  <div class="py-5">
    <h2 class="text-center">Registration form</h2>
  </div>

<div class="w-50 m-auto">
  <form action="teacherRegistrationInfo.php" method="post">
    <div class="form-group">
      <label>Full name </label>
      <input type="text" name="fullname" autocomplete="off" class="form-control" required>  
    </div>

    <div class="form-group">
      <label>Email </label>
      <input type="email" name="email" autocomplete="off" class="form-control" required>  
    </div>

     <div class="form-group">
      <label>Password </label>
      <input type="password" name="password" autocomplete="off" class="form-control" required>  
    </div>

    <div class="form-group">
      <label>Teacher Id. </label>
      <input type="text" name="teacherid" autocomplete="off" class="form-control" required>  
    </div>
<div class="form-group">
      <label>Mobile No. </label>
      <input type="text" name="mobile" autocomplete="off" class="form-control" required>  
    </div>

			<button type="submit" class="btn btn-success" style="margin-left: 290px">Register</button><br><br><br>

  </form>
  </div>

	<footer>
  <p class="p-3 bg-dark text-white text-center"><a href="#"></a></p>
</footer>


</body>
</html>