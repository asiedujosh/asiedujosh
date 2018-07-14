<?php
$servername = "localhost";
$username = "root";
$password = "Katalambano90";
$dbname = "farmweb";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die('error: '.$conn->connect_error);
}

if(isset($_POST['save'])){
/*Get category*/
$cat = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['category']));



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
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Our Farmers
              <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class = "container">
      <br /><br/><br/>
<h2>We have what you want</h2>
<table class = "table table_hover">

  <thead>
    <th><h5>First Name</h5></th>
    <th><h5>Last Name</h5></th>
    <th><h5>Region</h5></th>
    <th><h5>District</h5></th>
    <th><h5>Crops</h5></th>
    <th><h5>Variety</h5></th>
    <th><h5>Pricing</h5></th>
    <th><h5>Action</h5></th>
  </thead>
  <tbody>

<?php
switch($cat){
  case "1":
  $sql = "SELECT * FROM farmcat1";
  $result = mysqli_query($conn,$sql);

  if($result->num_rows>0){
  while($nas = $result -> fetch_assoc()){?>

  <tr>
    <div id = "result"></div>
<td><?php echo $nas['firstName']; ?></td>
<td><?php echo $nas['lastName']; ?></td>
<td><?php echo $nas['region']; ?></td>
<td><?php echo $nas['district']; ?></td>
<td><?php echo $nas['crops']; ?></td>
<td><?php echo $nas['var']; ?></td>
<td><?php echo $nas['pricing']; ?></td>
<td><a id="edit_btn" href="look.php?edit=<?php echo $nas['idNumber'];?>">View Info</a></td>
  </tr>
<?php 
} } else {?> <h3>No Records Found</h3> <?php
 }


   

  break;

   case "2":
  $sql = "SELECT * FROM farmcat2";
  $result = mysqli_query($conn,$sql);

   if($result->num_rows>0){
  while($nas = $result -> fetch_assoc()){?>  
 <tr>
    <div id = "result"></div>
<td><?php echo $nas['firstName']; ?></td>
<td><?php echo $nas['lastName']; ?></td>
<td><?php echo $nas['region']; ?></td>
<td><?php echo $nas['district']; ?></td>
<td><?php echo $nas['crops']; ?></td>
<td><?php echo $nas['var']; ?></td>
<td><?php echo $nas['pricing']; ?></td>
<td><a id="edit_btn" href="look.php?edit=<?php echo $nas['idNumber'];?>">View Info</a></td>
  </tr>
<?php 
} } else {?> <h3>No Records Found</h3> <?php
 }





  break;

   case "3":
  $sql = "SELECT * FROM farmcat3";
  $result = mysqli_query($conn,$sql);

   if($result->num_rows>0){
  while($nas = $result -> fetch_assoc()){?>
   
   <tr>
    <div id = "result"></div>
<td><?php echo $nas['firstName']; ?></td>
<td><?php echo $nas['lastName']; ?></td>
<td><?php echo $nas['region']; ?></td>
<td><?php echo $nas['district']; ?></td>
<td><?php echo $nas['crops']; ?></td>
<td><?php echo $nas['var']; ?></td>
<td><?php echo $nas['pricing']; ?></td>
<td><a id="edit_btn" href="look.php?edit=<?php echo $nas['idNumber'];?>">View Info</a></td>
  </tr>
<?php 
} } else {?> <h3>No Records Found</h3> <?php
 }



  break;

   case "4":
  $sql = "SELECT * FROM farmcat4";
  $result = mysqli_query($conn,$sql);

   if($result->num_rows>0){
  while($nas = $result -> fetch_assoc()){?>

     <tr>
    <div id = "result"></div>
<td><?php echo $nas['firstName']; ?></td>
<td><?php echo $nas['lastName']; ?></td>
<td><?php echo $nas['region']; ?></td>
<td><?php echo $nas['district']; ?></td>
<td><?php echo $nas['crops']; ?></td>
<td><?php echo $nas['var']; ?></td>
<td><?php echo $nas['pricing']; ?></td>
<td><a id="edit_btn" href="look.php?edit=<?php echo $nas['idNumber'];?>">View Info</a></td>
  </tr>
<?php 
} } else {?> <h3>No Records Found</h3> <?php
 }


   
  break;

   case "5":
  $sql = "SELECT * FROM farmcat5";
  $result = mysqli_query($conn,$sql);

   if($result->num_rows>0){
  while($nas = $result -> fetch_assoc()){?>


     <tr>
    <div id = "result"></div>
<td><?php echo $nas['firstName']; ?></td>
<td><?php echo $nas['lastName']; ?></td>
<td><?php echo $nas['region']; ?></td>
<td><?php echo $nas['district']; ?></td>
<td><?php echo $nas['crops']; ?></td>
<td><?php echo $nas['var']; ?></td>
<td><?php echo $nas['pricing']; ?></td>
<td><a id="edit_btn" href="look.php?edit=<?php echo $nas['idNumber'];?>">View Info</a></td>
  </tr>
<?php 
} } else {?> <h3>No Records Found</h3> <?php
 }


   
  break;



}
}


?>





</tbody>
</table>



</div>

 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; farmx 2018</p>
      </div>
      <!-- /.container -->
    </footer>

</body>
</html>