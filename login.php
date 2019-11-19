
<?php
session_start();

$conn=mysqli_connect('localhost','root');

if($conn){
	echo"Connection successful";
}
else{
	echo"No connection";
}

mysqli_select_db($conn,'contact_us');

$fullname = $_POST['fullname'] ;
$email = $_POST['email'] ;
$password = $_POST['password'];

$query = "select email from registrationinfo_data where email = '$email' && password = '$password' ";

$result = mysqli_query($conn,$query);

$num = mysqli_num_rows($result);

if($num == $result)
{
	//$fullname=$result[0];
	$_SESSION['email'] = $email;
	header('location:home.php');


}

else {
?>
<script type="text/javascript">
	alert("email already exists.");
</script>
<?php
	header('location:index.php');
}


?>