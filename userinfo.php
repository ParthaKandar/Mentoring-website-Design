<?php
$conn=mysqli_connect('localhost','root');

if($conn){
	echo"Connection successful";
}
else{
	echo"No connection";
}

mysqli_select_db($conn,'contact_us');

$username = $_POST['username'];
$email = $_POST['email'] ;
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into contact_data(username,email,mobile,comments)values ('$username','$email','$mobile','$comments')";

//echo"$query";

mysqli_query($conn,$query);
header('location:index.php');


?> 