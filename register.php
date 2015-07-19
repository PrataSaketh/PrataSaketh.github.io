<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
// define variables and set to empty values
$name = $email ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Username ="root";
	$Password ="potatofry2530";
	$Server = "localhost";
	$database ="shoppingcart";
	$connect = mysqli_connect($Server, $Username, $Password,$database);
	
	if(!connect){
		die("Connection failed:" .mysqli_connect_error());
	}
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$password= $_POST['password'];
	$mobile = $_POST['mobile'];
	$sql="INSERT INTO customers(`Name`,`email`,`password`,`mobile`)
		VALUES ('$Name','$email','$password','$mobile')";
	if(mysqli_query($connect,$sql)){
		echo "Account successfully created";
		echo "<br>";
	}
	mysqli_close($connect);
}	
?>

</body>
</html>

