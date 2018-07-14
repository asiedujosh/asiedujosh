<?php
$servername = "localhost";
$username = "root";
$password = "Katalambano90";
$dbname = "farmweb";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die('error: '.$conn->connect_error);
}


if(isset($_POST["login"])){
$email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
$password = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['password']));
$hashed_pass = password_hash($password,PASSWORD_DEFAULT);

$sql = "SELECT password, idNumber FROM farmerinfo WHERE email = '$email'";
$db = mysqli_query($conn, $sql);
if($db->num_rows>0){
  while($row = $db->fetch_assoc()){
    $pass = $row['password'];
    $id_number = $row['idNumber'];
  }
}


if(!password_verify($password,$pass)){
   header("location: login.php");
} 
else {

$sql = "SELECT * FROM profile WHERE idNumber = $id_number";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $firstName = $fill['firstName'];    
    $lastName = $fill['lastName'];     
    $region = $fill['region'];
    $district = $fill['district'];
    $locality = $fill['locality'];
    $tel = $fill['tel'];
    $email = $fill['email'];
    $idNumber = $fill['idNumber'];
    $passport = $fill['passport'];
    $name = $fill['name'];
    $telep = $fill['telep'];
    $remarks = $fill['remarks'];
    $comment = $fill['comment'];
  }
}

$sql = "SELECT * FROM farm WHERE idNumber = $id_number";
    $frm = mysqli_query($conn,$sql);

    if($frm->num_rows>0){
  //fetch data from profile
  while(
    $merh = $frm->fetch_assoc()){
    $farmSize = $merh['farmSize'];
    $quantity = $merh['Quantity'];
    $farmLoc =  $merh['farmlocation'];
    }
}

$sql = "SELECT crops, var, health, pricing FROM pfs1 WHERE idNumber = $id_number";
    $cat = mysqli_query($conn,$sql);

if($cat->num_rows>0){
  //fetch data from profile
  while(
    $loo = $cat->fetch_assoc()){
    $crop = $loo['crops'];
    $variety = $loo['var'];
    $health = $loo['health'];
    $pricing = $loo['pricing'];
    }
  } else {

}
$sql = "SELECT crops, var, health, pricing FROM pfs2 WHERE idNumber = $id_number";
    $cat = mysqli_query($conn,$sql);

if($cat->num_rows>0){
  //fetch data from profile
  while(
    $loo = $cat->fetch_assoc()){
    $crop = $loo['crops'];
    $variety = $loo['var'];
    $health = $loo['health'];
    $pricing = $loo['pricing'];
    }
  } else {

}
$sql = "SELECT crops, var, health, pricing FROM pfs3 WHERE idNumber = $id_number";
    $cat = mysqli_query($conn,$sql);

if($cat->num_rows>0){
  //fetch data from profile
  while(
    $loo = $cat->fetch_assoc()){
    $crop = $loo['crops'];
    $variety = $loo['var'];
    $health = $loo['health'];
    $pricing = $loo['pricing'];
    }
  } else {

}

$sql = "SELECT crops, var, health, pricing FROM pfs4 WHERE idNumber = $id_number";
    $cat = mysqli_query($conn,$sql);

if($cat->num_rows>0){
  //fetch data from profile
  while(
    $loo = $cat->fetch_assoc()){
    $crop = $loo['crops'];
    $variety = $loo['var'];
    $health = $loo['health'];
    $pricing = $loo['pricing'];
    }
  } else {

}

$sql = "SELECT crops, var, health, pricing FROM pfs5 WHERE idNumber = $id_number";
    $cat = mysqli_query($conn,$sql);

if($cat->num_rows>0){
  //fetch data from profile
  while(
    $loo = $cat->fetch_assoc()){
    $crop = $loo['crops'];
    $variety = $loo['var'];
    $health = $loo['health'];
    $pricing = $loo['pricing'];
    }
  } else { 

}

$sql = "SELECT Img1, Img2, Img3 FROM Images WHERE idNumber = $id_number";
    $cat = mysqli_query($conn,$sql);

if($cat->num_rows>0){
  //fetch data from profile
  while(
    $loo = $cat->fetch_assoc()){
    $farmI = $loo['Img1'];
    $farmII = $loo['Img2'];
    $farmIII = $loo['Img3'];
}
} else{

}
$sql = "SELECT * FROM aeainfo WHERE idNumber = $id_number";
    $frm = mysqli_query($conn,$sql);

    if($frm->num_rows>0){
  //fetch data from profile
  while(
    $merh = $frm->fetch_assoc()){
    $name = $merh['name'];
    $telep = $merh['telep'];
    }
}
} 
}
else {
   header("location: login.php");
}










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
    <link href="malt/font-awesome.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="adminpanel.php"><img src = "farmX.png" style="width:2em; height:2em;"/> FarmX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">LogOut</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Update
              <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class = "container">
<form  action = "backend1.php" method = "POST" enctype = "multipart/form-data">
  <br/><br/>
  <div class = "row">
    <div class = "col-md-12">
<h3>Personal Information</h3>
</div>
</div>
<div class = "row">
  <div class = "col-md-6">
<label for "firstName" class = "control-label">Name:</label>
</div>
</div>
<div class = "row">
<div class = "col-md-6">
<input type = "text" class = "form-control" name = "firstName" value = "<?php echo $firstName; ?>"/>
</div>
<div class = "col-md-6">
<input type = "text" class = "form-control" name = "lastName" value = "<?php echo $lastName; ?>"/>
</div>
</div>
<div class ="row">
<div class = "col-md-6 padding-top-10">
<label for = "gender" class = "control-label">
Gender:</label>
<select name = "gender" class = "form-control">
<option value = "1">Male</option>
<option value = "2">Female</option>
</select>
</div>
<div class = "col-md-6 padding-top-10">
<label for = "region" class = "control-label">
Region:</label>
<select name = "region" class = "form-control">
<option value = "1">Northern</option>
<option value = "2">Upper West</option>
<option value = "3">Upper East</option>
<option value = "4">Brong Ahafo</option>
<option value = "5">Eastern</option>
<option value = "6">Ashanti</option>
<option value = "7">Central</option>
<option value = "8">Greater Accra</option>
<option value = "9">Volta</option>
<option value = "10">Western</option>
</select>
</div>
</div>
<div class = "row">
<div class = "col-md-6 padding-top-10">
<label for = "district" class = "control-label">
District:</label>
<input type = "text" class = "form-control" name = "district" value = "<?php echo $district; ?>"/>
</div>
<div class = "col-md-6 padding-top-10">
<label for = "locality" class = "control-label">
Locality:</label>
<input type = "text" class = "form-control" name = "locality" value = "<?php echo $locality; ?>"/>
</div>
</div>
<div class = "row">
<div class = "col-md-6 padding-top-10">
<label for = "contactNum" class = "control-label">
Contact Number:</label>
<input type = "text" class = "form-control" name = "contactNum" value = "<?php echo $tel; ?>"/>
</div>
<div class = "col-md-6 padding-top-10">
<label for = "emailAdd" class = "control-label">
Email Address:</label>
<input type = "email" class = "form-control" name = "emailAdd" value = "<?php echo $email; ?>"/>
</div>
</div>
<div class = "row">
<div class = "col-md-4 padding-top-10">
<input type = "hidden" class = "form-control" name = "id_number" value = "<?php echo $idNumber; ?>"/>
</div>
</div>
<div class = "row">
<div class = "col-md-8 padding-top-10">
<label for = "file" class = "control-label">
Passport pic:</label>
<input type = "file" name = "foto1" value = "<?php $passport; ?>"/>
</label>
</div>
</div>
<h3>Farm Information</h3>
<div class = "row">
<div class = "col-md-6">
<label for = "farmLocation" class = "control-label">Farm location:</label>
<input type = "text" class = "form-control" name = "farmLocation" value = "<?php echo $farmLoc; ?>"/>
</div>
<div class = "col-md-6 padding-top-10">
<label for = "farmSize" class = "control-label">Farm Size:</label>
<input type = "text" class = "form-control" name = "farmSize" value = "<?php echo $farmSize; ?>" />
</div>
</div>
<div class = "row">
<div class = "col-md-4">
<label for = "crop5" class = "control-label">Crop:</label>
<input type = "price" class = "form-control" name = "" value = "<?php echo $crop; ?>" readonly/>
</div>
<div class = "col-md-4">
<label for = "cropVar5" class = "control-label">Crop Variety:</label>
<input type = "price" class = "form-control" name = "variety" value = "<?php echo $variety; ?>" />
</div>
<div class = "col-md-4">
<label for = "health5" class = "control-label">Crop Health:</label>
<input type = "price" class = "form-control" name = "" value = "<?php echo $health; ?>" readonly/>
</select> 
</div>
</div>
<div class = "row">
<div class = "col-md-4">
  <br /><br />
<img src = "<?php echo $farmI; ?>" style = "width: 25em; height:20em;"/>
</div>
<div class = "col-md-4">
  <br /><br />
<img src = "<?php echo $farmII; ?>" style = "width: 25em; height:20em;"/>
</div>
<div class = "col-md-4">
  <br /><br />
<img src = "<?php echo $farmIII; ?>" style = "width: 25em; height:20em;"/>
</div>
  </div>
<div class = "row">
<div class = "col-md-3">
<label for = "crop" class = "control-label">Farm Image:</label>
<input type = "file" name = "foto2" />
</div>
<div class = "col-md-3">
<label for = "crop" class = "control-label">Crop 1 Image:</label>
<input type = "file" name = "foto3" />
</div>
<div class = "col-md-3">
<label for = "crop" class = "control-label">Crop 2 Image:</label>
<input type = "file" name = "foto4" />
</div>
</div>
<div class = "row">
<div class = "col-md-6 padding-top-10">
<label for = "aeaName" class = "control-label">Name of Agriculture Extension Agent:</label>
<input type = "text" class = "form-control" name = "aeaName" value = "<?php echo $name; ?>" readonly/>
</div>
<div class = "col-md-6 padding-top-10">
<label for = "aeaNo" class = "control-label">Officer's Number:</label>
<input type = "text" class = "form-control" name = "aeaNo" value = "<?php echo $telep; ?>" readonly/>
</div>
</div>
<h3>Product Cost Information</h3>
<div class = "row">
<div class = "col-md-4">
<label for = "quantity" class = "control-label">Quantity:</label>
<input type = "text" class = "form-control" name = "quantity" value = "<?php echo $quantity; ?>" /> 
</div>
<div class = "col-md-4">
<label for = "pricing" class = "control-label">Pricing:</label>
<input type = "price" class = "form-control" name = "pricing" value = "<?php echo $pricing; ?>" />
</div>
<div class = "col-md-4">
<label for = "negotiable" class = "control-label">Negotiable:</label>
<input type = "price" class = "form-control" name = "" value = "<?php echo $remarks; ?>" readonly/>
</div>
</div>
<div class = "row">
<div class = "col-md-12 padding-top-10">
<label for = "comment" class = "control-label">Farm description:</label>
<textarea class = "form-control" rows = "5" name = "comment" ><?php echo $comment; ?></textarea>
</div>
</div>
<h3>Beneficiary Undertake</h3>
<div class = "row">
<div class = "col-md-12 padding-top-10">
<div class = "checkbox">
<label>
<input type = "checkbox" required/>
I testify that all information provided are true and transaction I undertake here is 
with my own accord. I bare full consequences to any actions I undertake here.
</label>
</div>
</div>
</div>
<div class = "row">
<div class = "col-md-12">
<button type = "submit" class = "btn btn-success" name = "update">Update</button>
</div>
</div>
<br/>
</form>
</div>
 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; farmx 2018</p>
      </div>
      <!-- /.container -->
    </footer>



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="jquery-3.3.1.min.js"></script>
    <script src=""></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    </div>
</body>
</html>




<!--SELECT farmerinfo.idNumber, farmerinfo.firstName, farmerinfo.lastName, region.region,
farmerinfo.district, crop.crops, category1.var, category1.pricing FROM
farmerinfo INNER JOIN category1 ON farmerinfo.idNumber = category1.idNumber INNER JOIN crop
ON category1.crop = crop.id INNER JOIN region ON farmerinfo.region = region.id -->


<!--
  SELECT farmerinfo.firstName,farmerinfo.lastName,region.region,farmerinfo.district,farmerinfo.locality,farmerinfo.tel,
farmerinfo.email, farmerinfo.idNumber, farmerinfo.passport, aeainfo.name, aeainfo.tel, sellinginfo.negotiable,
sellinginfo.comment, sellinginfo.negotiable, sellinginfo.comment, sellinginfo.farmImg FROM farmerinfo INNER JOIN
region ON farmerinfo.region = region.id INNER JOIN aeainfo ON aeainfo.idNumber = farmerinfo.idNumber INNER JOIN 
sellinginfo ON farmerinfo.idNumber = sellinginfo.idNumber


SELECT farmerinfo.firstName,farmerinfo.lastName,region.region,farmerinfo.district,farmerinfo.locality,farmerinfo.tel,
farmerinfo.email,farmerinfo.idNumber,farmerinfo.passport,aeainfo.name,aeainfo.telep,negotiable.remarks,
sellinginfo.comment, sellinginfo.farmImg FROM farmerinfo INNER JOIN
region ON farmerinfo.region = region.id INNER JOIN aeainfo ON aeainfo.idNumber = farmerinfo.idNumber INNER JOIN 
sellinginfo ON farmerinfo.idNumber = sellinginfo.idNumber INNER JOIN negotiable ON sellinginfo.negotiable = negotiable.id;



SELECT category1.idNumber, crop.crops, category1.var,
crophealth.health, category1.cropImg, category1.pricing
FROM category1 INNER JOIN crop ON category1.crop = crop.id
INNER JOIN crophealth ON category1.health = crophealth.id


-->
