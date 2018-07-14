<?php
$servername = "localhost";
$username = "root";
$password = "Katalambano90";
$dbname = "farmweb";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die('error: '.$conn->connect_error);
}

$id = 0;
if(isset($_GET['edit'])){
  $id_number = $_GET['edit'];
    $edit_state = true;


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
}

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
    
    <link rel="stylesheet" href="malt/styles.css" />
    <link rel="stylesheet" href="malt/look.css" />
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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class = "container">
      <br /><br/><br/><br /><br />
      <div class = "row">
        <div class = "col-md-12">
          <h3><?php echo $firstName; ?>'s Profile Page</h3>
        </div>
      </div>
<div class = "row">
<div class = "col-md-4">
<img src = "<?php echo $passport; ?>" width= '150' height = '150'/>
</div>
<div class = "col-md-4">
  <div id = "info">
Name: <?php echo $firstName; ?> <?php echo $lastName; ?><br />
Id Number: <?php echo $idNumber; ?><br />
Region: <?php echo $region; ?> <br />
District: <?php echo $district; ?> <br />
Location: <?php echo $locality; ?> <br />
Email: <?php echo $email; ?><br />
Tel Number: <?php echo $tel; ?> <br />
</div>
</div>
<div class = "col-md-4">
  <div id = "info">
AEA Name: <?php echo $name; ?><br />
AEA Tel: <?php echo $telep; ?> <br />
Region Of Operation: <?php echo $region; ?> <br />
Institution: Ministry Of Food And Agriculture <br />
Location: <?php echo $locality; ?> <br />
Email: gomoacentraldistrict3@gmail.com <br />
</div>
</div>

</div>
<div class = "row">
        <div class = "col-md-12">
 <h3>Farm Product</h3>
</div>
</div>
<div class = "row">
<div class = "col-md-4">
<img src = "<?php echo $farmI; ?>" style = "width: 25em; height:20em;"/>
</div>
<div class = "col-md-4">
<img src = "<?php echo $farmII; ?>" style = "width: 25em; height:20em;"/>
</div>
<div class = "col-md-4">
<img src = "<?php echo $farmIII; ?>" style = "width: 25em; height:20em;"/>
</div>

 
</div>
<div class = "row">
        <div class = "col-md-12">
<h3>Farm, Product And Pricing</h3>
</div>
</div>
  <div class = "row">
        <div class = "col-md-4">
   <h5> Farm location: <?php echo $locality; ?><br />
    Farm Size: <?php echo $farmSize; ?><br />
    Crops grown: <?php echo $crop; ?><br />
  </h5>
</div>
        <div class = "col-md-4">
  <h5>
    Varieties available: <?php echo $variety; ?><br />
    Produce per harvest: <?php echo $quantity; ?><br />
    Pricing per unit: <?php echo $pricing; ?> <br />
  </h5>
</div>

        <div class = "col-md-4">
  <h5>
    Farm and Crop health: <?php echo $health; ?><br />
    Negotiable: <?php echo $remarks; ?> <br />
    Farmer Comments: <?php echo $comment; ?>
</h5>
</div>
</div>
<div class = "row">
        <div class = "col-md-12">
  <h3>Call Farmer Now: <?php echo $tel; ?></h3>
  </div>
</div>

</div>
 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; farmx 2018</p>
      </div>
      <!-- /.container -->
    </footer>



<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>

<!--
  SELECT farmerinfo.firstName,farmerinfo.lastName,region.region,farmerinfo.district,farmerinfo.locality,farmerinfo.tel,
farmerinfo.email, farmerinfo.idNumber, farmerinfo.passport, aeainfo.name, aeainfo.tel, sellinginfo.negotiable,
sellinginfo.comment, sellinginfo.negotiable, sellinginfo.comment, sellinginfo.farmImg FROM farmerinfo INNER JOIN
region ON farmerinfo.region = region.id INNER JOIN aeainfo ON aeainfo.idNumber = farmerinfo.idNumber INNER JOIN 
sellinginfo ON farmerinfo.idNumber = sellinginfo.idNumber


SELECT farmerinfo.firstName,farmerinfo.lastName,region.region,farmerinfo.district,farmerinfo.locality,farmerinfo.tel,
farmerinfo.email,farmerinfo.idNumber,farmerinfo.passport,aeainfo.name,aeainfo.telep,negotiable.remarks,
sellinginfo.comment FROM farmerinfo INNER JOIN
region ON farmerinfo.region = region.id INNER JOIN aeainfo ON aeainfo.idNumber = farmerinfo.idNumber INNER JOIN 
sellinginfo ON farmerinfo.idNumber = sellinginfo.idNumber INNER JOIN negotiable ON sellinginfo.negotiable = negotiable.id;



SELECT category1.idNumber, crop.crops, category1.var,
crophealth.health, category1.cropImg, category1.pricing
FROM category1 INNER JOIN crop ON category1.crop = crop.id
INNER JOIN crophealth ON category1.health = crophealth.id


-->
