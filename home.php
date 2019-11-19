<?php 

session_start();

if(!isset($_SESSION['email'])){
	header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">


  <script type="<script src="https://kit.fontawesome.com/7143e5f60a.js" crossorigin="anonymous"></script></script>

  <style type="text/css">
    .wrapper .slidebar{
  position: fixed;
  width: 200px;
  height: 100%
  background: #4b4276;
}
  </style>

</head>
<body>
<div style="margin-left:0%">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
  <a class="navbar-brand mb-0 h1" href="#"><img src="images\kiitlogo.png" width="30" height="30" alt="">Mentoring Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><?php echo $_SESSION['email']; ?><span class="sr-only"></span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout <span class="sr-only"></span></a>
      </li>
    </ul>
    
  </div>
</nav>

<div class="w3-sidebar w3-light-blue w3-bar-block">
  <h2 class="w3-bar-item">Menu</h2>
 <a href="home.php" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Attendence</a>
    <a href="#" class="w3-bar-item w3-button">Assignments</a>
  <a href="#" class="w3-bar-item w3-button">Notice Board</a>
  <a href="#" class="w3-bar-item w3-button">Tutor Mentor Report</a>
</div>
</div>

</body>
</html>

