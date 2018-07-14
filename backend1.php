<?php
$firstName = $lastName = $gender = $region = $district = $locality = $contactNum = $emailAdd
= $id_number = $password = $conf_password = $target1 = $farmLocation = $farmSize = 
$cat1 = $crop1 = $cropVar1 = $Health1 = "";
$cat2 = $crop2 = $cropVar2 = $Health2 = "";
$cat3 = $crop3 = $cropVar3 = $Health3 = "";
$cat4 = $crop4 = $cropVar4 = $Health4 = "";
$cat5 = $crop5 = $cropVar5 = $Health5 = "";
$target2 = $target3 = $target4 = $target5 = $aeaName = $aeaTel = $quantity = $pricing = $negotiable =
$comment = "";
$errors = array();


$servername = "localhost";
$username = "root";
$password = "Katalambano90";
$dbname = "farmweb";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die('error: '.$conn->connect_error);
}

/*include('conn.inc.php');*/

if(isset($_POST['save'])){
  $firstName = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['firstName']));
  $lastName = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['lastName']));
  $gender = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['gender']));
  $region = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['region']));
  $district = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['district']));
  $locality = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['locality']));
  $contactNum = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['contactNum']));
  $emailAdd = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emailAdd']));
  $id_number = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id_number']));
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $hashed_pass = password_hash($password,PASSWORD_DEFAULT);
  $conf_password = mysqli_real_escape_string($conn,$_POST['conf_password']);


  $target1 = $_FILES['foto1']['name'];
  $temp = $_FILES['foto1']['tmp_name'];
  $file_to_saved1 = "document/".$target1;
  move_uploaded_file($temp, $file_to_saved1);

  $farmLocation = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['farmLocation']));
  $farmSize = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['farmSize']));

  $cat1 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['cat1']));
  $cat2 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['cat2']));
  $cat3 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['cat3']));
  $cat4 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['cat4']));
  $cat5 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['cat5']));

  $crop1 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['crop1']));
  $crop2 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['crop2']));
  $crop3 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['crop3']));
  $crop4 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['crop4']));
  $crop5 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['crop5']));

  $cropVar1 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['cropVar1']));
  $cropVar2 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['cropVar2']));
  $cropVar3 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['cropVar3']));
  $cropVar4 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['cropVar4']));
  $cropVar5 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['cropVar5']));

  $Health1 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['health1']));
  $Health2 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['health2']));
  $Health3 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['health3']));
  $Health4 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['health4']));
  $Health5 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['health5']));
  
  /*Target2 */
  $target2 = $_FILES['foto2']['name'];
  $temp = $_FILES['foto2']['tmp_name'];
  $file_to_saved2 = "document/".$target2;
  move_uploaded_file($temp, $file_to_saved2);

  /*Target3 */
  $target3 = $_FILES['foto3']['name'];
  $temp = $_FILES['foto3']['tmp_name'];
  $file_to_saved3 = "document/".$target3;
  move_uploaded_file($temp, $file_to_saved3);

  /*Target4 */
  $target4 = $_FILES['foto4']['name'];
  $temp = $_FILES['foto4']['tmp_name'];
  $file_to_saved4 = "document/".$target4;
  move_uploaded_file($temp, $file_to_saved4);




  $aeaName = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['aeaName']));
  $aeaTel = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['aeaNo']));
  $quantity = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['quantity']));
  $pricing = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['pricing']));
  $negotiate = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['negotiable']));
  $comment = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['comment']));




  if($password !== $conf_password){
    array_push($errors, "*Your password dont match");
  } 
  

    $sql = "SELECT idNumber FROM farmerinfo WHERE idNumber = $id_number";
    $db = mysqli_query($conn,$sql);

    if($db == TRUE){
    array_push($errors, "*Farmer with ID Number already exist");
  } 
      
      if(count($errors)==0){
  /*include('insert.php');*/
    $sql = "INSERT INTO farmerinfo(firstName, lastName, gender, region, district, locality, tel, email, idNumber, password, passport) 
    VALUES ('$firstName', '$lastName', '$gender', '$region', '$district', '$locality', '$contactNum', '$emailAdd', '$id_number', '$hashed_pass', '$file_to_saved1')";
    $db = mysqli_query($conn,$sql);



    switch($cat1){
      case "1":
      $sql = "INSERT INTO category1(idNumber, crop, var, health, pricing)
      VALUES ('$id_number','$crop1','$cropVar1','$Health1','$pricing')";
      $db = mysqli_query($conn,$sql);
      break;

    }

    switch($cat2){
      case "2":
      $sql = "INSERT INTO category2(idNumber, crop, var, health, pricing)
      VALUES ('$id_number','$crop2','$cropVar2','$Health2',$pricing')";
      $db = mysqli_query($conn,$sql);
      break;

    }

    switch($cat3){
      case "3":
      $sql = "INSERT INTO category3(idNumber, crop, var, health, pricing)
      VALUES ('$id_number','$crop3','$cropVar3','$Health3','$pricing')";
      $db = mysqli_query($conn,$sql);
      break;

    }

    switch($cat4){
      case "4":
      $sql = "INSERT INTO category4(idNumber, crop, var, health, pricing)
      VALUES ('$id_number','$crop4','$cropVar4','$Health4', '$pricing')";
      $db = mysqli_query($conn,$sql);
      break;

    }

    switch($cat5){

      case "5":
      $sql = "INSERT INTO category1(idNumber, crop, var, health, pricing)
      VALUES ('$id_number','$crop5','$cropVar5','$Health5','$pricing')";
      $db = mysqli_query($conn,$sql);
      break;

    }

    $sql = "INSERT INTO aeainfo(idNumber, name, telep) VALUES ('$id_number', '$aeaName', '$aeaTel')";
    /*Query the database*/
    $db = mysqli_query($conn,$sql);

    $sql = "INSERT INTO sellinginfo(idNumber, negotiable, comment) VALUES ('$id_number', '$negotiate', '$comment')";
    /*Query the database*/
    $db = mysqli_query($conn,$sql);

    $sql = "INSERT INTO farm(farmlocation, farmSize, Quantity, idNumber) VALUES ('$farmLocation','$farmSize', '$quantity', '$id_number')";
    /*Query the database*/
    $db = mysqli_query($conn,$sql);

    $sql = "INSERT INTO Images(idNumber, Img1, Img2, Img3) VALUES ('$id_number', '$file_to_saved2', '$file_to_saved3', '$file_to_saved4')";
    /*Query the database*/
    $db = mysqli_query($conn,$sql);
    }
}

    
    

/*include('conn.inc.php');*/

	

  if(isset($_POST['update'])){
  		$firstName = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['firstName']));
		$lastName = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['lastName']));
		$region = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['region']));
		$district = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['district']));
		$locality = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['locality']));
		$contactNum = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['contactNum']));
		$emailAdd = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emailAdd']));
		$id_number = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id_number']));
		$target1 = $_FILES['foto1']['name'];
		$temp = $_FILES['foto1']['tmp_name'];
		$file_to_saved1 = "document/".$target1;
		move_uploaded_file($temp, $file_to_saved1);

		$farmLocation = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['farmLocation']));
		$farmSize = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['farmSize']));
		$cropVar = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['variety']));
		/*Target2 */
		$target2 = $_FILES['foto2']['name'];
		$temp = $_FILES['foto2']['tmp_name'];
		$file_to_saved2 = "document/".$target2;
		move_uploaded_file($temp, $file_to_saved2);

		/*Target3 */
		$target3 = $_FILES['foto3']['name'];
		$temp = $_FILES['foto3']['tmp_name'];
		$file_to_saved3 = "document/".$target3;
		move_uploaded_file($temp, $file_to_saved3);

		/*Target4 */
		$target4 = $_FILES['foto4']['name'];
		$temp = $_FILES['foto4']['tmp_name'];
		$file_to_saved4 = "document/".$target4;
		move_uploaded_file($temp, $file_to_saved4);

		$quantity = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['quantity']));
		$pricing = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['pricing']));
		$comment = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['comment']));


		$sql = "UPDATE farmerinfo SET firstName = '$firstName', lastName = '$lastName', region = '$region',
		district = '$district', locality = '$locality', tel = '$contactNum', email = '$emailAdd'
		WHERE idNumber = '$id_number'";
		$db = mysqli_query($conn,$sql);

		$sql = "UPDATE category1 SET var = '$cropVar', pricing = '$pricing' WHERE idNumber = '$id_number'";
		$db = mysqli_query($conn,$sql);

		$sql = "UPDATE category2 SET var = '$cropVar', pricing = '$pricing' WHERE idNumber = '$id_number'";
		$db = mysqli_query($conn,$sql);

		$sql = "UPDATE category3 SET var = '$cropVar', pricing = '$pricing' WHERE idNumber = '$id_number'";
		$db = mysqli_query($conn,$sql);

		$sql = "UPDATE category4 SET var = '$cropVar', pricing = '$pricing' WHERE idNumber = '$id_number'";
		$db = mysqli_query($conn,$sql);

		$sql = "UPDATE category5 SET var = '$cropVar', pricing = '$pricing' WHERE idNumber = '$id_number'";
		$db = mysqli_query($conn,$sql);

		$sql = "UPDATE sellinginfo SET comment = '$comment' WHERE idNumber = '$id_number'";
		$db = mysqli_query($conn,$sql);

		$sql = "UPDATE farm SET farmlocation = '$farmLocation', farmSize = '$farmSize', Quantity = '$quantity' WHERE idNumber = '$id_number'";
		$db = mysqli_query($conn,$sql);

		if(!$target1 == ""){
			$sql = "UPDATE farmerinfo SET passport = '$file_to_saved1' WHERE idNumber = '$id_number'";
			$db = mysqli_query($conn,$sql);
		} else{ }

		if(!$target2 == ""){
		$sql = "UPDATE Images SET Img1 = '$file_to_saved2' WHERE idNumber = '$id_number'";
		$db = mysqli_query($conn,$sql);
	} else{ }

		if(!$target3 == ""){
			$sql = "UPDATE Images SET Img2 = '$file_to_saved3' WHERE idNumber = '$id_number'";
			$db = mysqli_query($conn,$sql);
		} else{ }

		if(!$target4 == ""){
		$sql = "UPDATE Images SET Img3 = '$file_to_saved4' WHERE idNumber = '$id_number'";
		$db = mysqli_query($conn,$sql);
	} else { }

	header("location: cart.php");

  }
  else
   { }
