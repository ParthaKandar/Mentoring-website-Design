<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript">
    function popup(){
      document.getElementById("popup").style.display = "block";
    }
  </script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
  <style type="text/css">
    #popup{
    display: none;
    justify-content: center;
    align-items: center;
    border:1px;
    position: absolute;
    width: 100%;
    height: 100%;
    top:0;
    box-shadow: 5px 10px #888888;
  }

  </style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand mb-0 h1" href="#"><img src="images\kiitlogo.png" width="30" height="30" alt=""> E-Mentoring System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SignIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="login.php" method="post">
             <div class="form-group">
                <label style="margin-left: 5px">Username </label>
                <input type="email" name="email" autocomplete="off" class="form-control" style="margin-left: 5px;margin-right: 5px;width:150px;">  
              </div>

             <div class="form-group">
                 <label style="margin-left: 5px">Password </label>
                  <input type="password" name="password" autocomplete="off" class="form-control" style="margin-left: 5px;margin-right: 5px;width:150px;">  
             </div>

            <button type="submit" class="btn btn-success" style="margin-left: 50px;margin-right: 50px;width:70px;">LogIn</button>
            </div>
        </form>

        <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="signup.php">SignUP</a>
      </li>
      </li>
    
  </div>
</nav>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/kiitcampus.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>KIIT Campus in one picture</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/kiitgate.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>KIIT main entry gate</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/green_campus.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>KIIT campus</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class= "my-5">
	<div >
		<h2 class="text-center">About Us</h2>
	</div>

<br><div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/keyboard.jpg" class="img-fluid aboutimg">
      </div>
  
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-7">Get to know about your Maintors</h2>
      <p class="py-1"> First of all welcome to kiit. Basically kiit provide you a maintor baseds on ur roll no. Here you can share all kinds of problems with your maintors.</p> 
      <a href="about.php" class="btn btn-success"> Check More</a>
      </div>
    </div>
  </div>
</section>
	
<section class= "my-5">
  <div class="py-5">
    <h2 class="text-center">Our Maintors</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-12">
      <div class="card" >
  <img class="card-img-top" src="images/satyaranjansir.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Dr. Satyaranjan Dash</h4>
    <p class="card-text">Associate Professor-I of KIIT SCA department</p>
    <a href="satyasir.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>

    <div class="col-lg-3 col-md-3 col-12">
      <div class="card" >
  <img class="card-img-top" src="images/patrasir.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Dr. Sudhanshu Shekhar Patra</h4>
    <p class="card-text">Associate Professor-II of KIIT SCA department</p>
    <a href="patrasir.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
  
  <div class="col-lg-3 col-md-3 col-12">
      <div class="card" >
  <img class="card-img-top" src="images/prachimaam.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"> Mrs. Prachi Vijayeeta</h4>
    <p class="card-text">Associate Professor-II of KIIT SCA department</p>
    <a href="prachimaam.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>

    <div class="col-lg-3 col-md-3 col-12">
      <div class="card" >
  <img class="card-img-top" src="images/manas sir.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"> Mr. Manas Kumar Rath</h4>
    <p class="card-text">Asst.Professor – II </p>
    <a href="manassir.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>

  </div>
</div>

</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallary</h2>
  </div>

  <div class="container-fluid">
   <div class="row">
     <div class="col-lg-4 col-md-4 col-12">
      <img src="images/room.jpg" class="img-fluid pb-4">
       
     </div>
     <div class="col-lg-4 col-md-4 col-12">
      <img src="images/sidi.jpg" class="img-fluid pb-4">
       
     </div>
     <div class="col-lg-4 col-md-4 col-12">
      <img src="images/library.jpg" class="img-fluid pb-4">
       
     </div>
     <div class="col-lg-4 col-md-4 col-12">
      <img src="images/get.jpg" class="img-fluid pb-4">
       
     </div>
     <div class="col-lg-4 col-md-4 col-12">
      <img src="images/building.jpg" class="img-fluid pb-4">
       
     </div>
     <div class="col-lg-4 col-md-4 col-12">
      <img src="images/room2.jpg" class="img-fluid pb-4">
       
     </div>
   </div> 
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Feedback</h2>
  </div>

<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>ID </label>
      <input type="text" name="username" autocomplete="off" class="form-control" required>  
    </div>

    <div class="form-group">
      <label>Email </label>
      <input type="text" name="email" autocomplete="off" class="form-control" required>  
    </div>

    

    <div class="form-group">
      <label>Comments </label>
      <textarea class="form-control" name="comments" required></textarea>  
    </div>
      <button type="submit" class="btn btn-success">Submit</button>

  </form>
  </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center"><a href="#"></a></p>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

</body>
</html>