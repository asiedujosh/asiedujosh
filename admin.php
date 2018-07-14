
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

$sql = "SELECT * FROM admin WHERE email = '$email' AND passwords = '$password'";
$db = mysqli_query($conn, $sql);

if(!$db){
   header("location: adminpanel.php");
} 
else {
$sql = "SELECT counts FROM counts WHERE 1";
$db = mysqli_query($conn, $sql);

if($db->num_rows>0){
   while($row = $db->fetch_assoc()){
    $visitors = $row['counts'];
}
}

$sql = "SELECT COUNT(idNumber) FROM farmerinfo";
$db = mysqli_query($conn, $sql);

if($db->num_rows>0){
   while($row = $db->fetch_assoc()){
    $count = $row['COUNT(idNumber)'];
}
}

$sql = "SELECT * FROM feedback";
$db = mysqli_query($conn, $sql);

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
              <a class="nav-link" href="service.php">Services 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminpanel.php">Logout</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Admin
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
<br/><br/>
<div class = "row">
<div class = "col-md-12">
  <h3>ADMINISTRATOR</h3>
</div>
</div>
<br/>
<div class = "row">
  <div class = "col-md-6">
<label for "visitors" class = "control-label"><h5>Number of visitors:</h5></label>
</div>
 <div class = "col-md-6">
<label for "visitors" class = "control-label"><h5>Number of registered Farmers:</h5></label>
</div>
</div>
<div class = "row">
  <div class = "col-md-6">
<input type = "text" class = "form-control" name = "visitors" value = "<?php echo $visitors; ?>" readonly/>
</div>
<div class = "col-md-6">
<input type = "text" class = "form-control" name = "visitors" value = "<?php echo $count; ?>" readonly/>
</div>
  </div>
  <div class = "row">
<div class = "col-md-12">
  <h3>Feedbacks</h3>
</div>
</div>
  <table class = "table table_hover">
  <thead>
     <th><h5>Name</h5></th>
    <th><h5>Email</h5></th>
    <th><h5>Comment</h5></th>
  </thead>
  <tbody>
    <?php
if($db->num_rows>0){
   while($row = $db->fetch_assoc()){
    $comment = $row['comment'];
?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['comment']; ?></td>
      <?php
    }
  } 
  } 
}
  else 
  {header("location:adminpanel.php"); 
}?>
      
    </tr>
  </tbody>
</table>


<br/><br/>
<br/><br/>
<br/><br/>
<br/>


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