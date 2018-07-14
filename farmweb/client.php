<?php
$servername = "localhost";
$username = "root";
$password = "Katalambano90";
$dbname = "farmweb";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die('error: '.$conn->connect_error);
}

if(isset($_POST['feedback'])){
/*Get category*/
$name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['name']));
$email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
$comment = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['comment']));

$sql = "INSERT INTO feedback(name, email, comment)
			VALUES ('$name','$email','$comment')";
			$db = mysqli_query($conn,$sql);

			header('location: index.php');
		}
		else
		{
			header('location: service.php');
		}

  ?>
