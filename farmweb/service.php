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
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Services
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
  <h3>OUR SERVICES</h3>
</div>
</div>

<div class = "row">
  <div class = "col-md-12">
<p><h6>FarmX was designed and powered by team Softouch. The purpose of this site is to
  help local farmers in the rural areas in Ghana and other villages market their farm
products online.</h6></p>
<p><h6>This in God we trust will help our cherished clients get fresh food products which has been grown from the farm
  using the right procedures and cultural practices which has been supervised by our Agriculture Extension
  Officers.  
  This will also give small scale farmers the opportunities to export their products.</h6></p>
<p><h6>Negotiations should be made directly with farmers</h6></p>
</div>
</div>
<div class = "row">
  <div class = "col-md-12">
    <p><h6>Thank you for giving us the opportunity to serve you.
      Please kindly help us make your experience with farmX much more exciting by filling the forms below</h6></p>
    </div>
  </div>
  <form  action = "client.php" method = "POST" enctype = "multipart/form-data">
  <div class = "row">
<div class = "col-md-6">
<input type = "text" class = "form-control" name = "name" placeholder = "Name" required/>
</div>
<div class = "col-md-6">
<input type = "text" class = "form-control" name = "email" placeholder = "Email" required/>
</div>
</div>
<br/>
<div class = "row">
<div class = "col-md-12 padding-top-10">
<label for = "comment" class = "control-label"><h6>How was your experience with FarmX?</h6></label>
<textarea class = "form-control" rows = "5" name = "comment"></textarea>
</div>
</div>
<br/>
<div class = "row">
<div class = "col-md-12">
<button type = "submit" class = "btn btn-success" name = "feedback">Submit</button>
</div>
</div>
</form>






<br/><br/>



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