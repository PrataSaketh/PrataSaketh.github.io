<?php session_start(); ?> 
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "potatofry2530";
$dbname = "shoppingcart";
$log = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
     // output data of each row
     while($row = $result->fetch_assoc())
     {
         if($row["id"]==$_POST["email"] && $row["password"]==$_POST["password"] )
         {
$_SESSION['name'] = $_POST["email"];
header('Location:product.php');
break;
             
           }
      else      {
               header ('Location:login.html');
		     }
	   }
}
else {
     header('Location:register.html');
}

$conn->close();
?>

</body>
</html>
