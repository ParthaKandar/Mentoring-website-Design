
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
$rollno = $_POST['rollno'];
$mobile = $_POST['mobile'];
$stream = $_POST['stream'];
$year = $_POST['year'];

if($stream =="MSc. comp" && $year =="3rd")
{
?>
	<script>
	alert("Wrong input.");
	</script>
<?php
	header('refresh:0,url=index.php');
}
else{

$query1 = "select email from registrationinfo_data where email = '$email' && password = '$password' ";



//echo"$query";

$result = mysqli_query($conn,$query1);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "duplicate data";

}
else {
	$query = "insert into registration_data(fullname,email,password,rollno,mobile,stream,year)values ('$fullname','$email','$password','$rollno','$mobile','$stream','$year')";
	mysqli_query($conn,$query);
	}
header('location:index.php');
}

?> 