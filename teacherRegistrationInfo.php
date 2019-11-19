
<?php
session_start();

$conn=mysqli_connect('localhost','root');

if($conn){
	//echo"Connection successful";
}
else{
	echo"No connection";
}

mysqli_select_db($conn,'contact_us');

$fullname = $_POST['fullname'];
$email = $_POST['email'] ;
$password = $_POST['password'] ;
$teacherid = $_POST['teacherid'];
$mobile = $_POST['mobile'];

$query1 = "select email from teacherregistration_data where email = '$email' && password = '$password' ";



//echo"$query";

$result = mysqli_query($conn,$query1);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "duplicate data";

}
else {
	$query = "insert into teacherregistration_data(fullname,email,password,teacherid,mobile)values ('$fullname','$email','$password','$teacherid','$mobile')";
	mysqli_query($conn,$query);
	}
header('location:index.php');

?> 