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
    

    
    
  

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Farmers at you door step</title>

    <!-- Bootstrap core CSS -->
    <link href="malt/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="malt/half-slider.css" rel="stylesheet">
    <link href="malt/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="malt/styles.css" />
     <link rel="stylesheet" href="malt/service.css" />
    <!-- Font Awesome -->
    <link href="font/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src = "images/farmX.png" style="width:2em; height:2em;"/> FarmX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Congratulations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class = "container">
      <br /><br/><br/>
<h2>Welcome to FarmX, <br/> You have Successfully registered and your Information has been updated.<br/>
Thank you</h2>
<div class = "row">
<div class = "col-md-8">
<button type = "button" class = "btn btn-warning" ><a href = "index.php">Click to Explore</a></button>
</div>

</div>
</body>
</html>

<?php }
    else{
      include('register.php');
} 
}
?>