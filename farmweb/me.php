
<?php include("backend1.php"); ?>
<!doctype html>
<html>
<head>

<!--Html view properties-->
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Bootstrap here-->
	<link rel="stylesheet" href = "bootstrap-3.3.7/dist/css/bootstrap.min.css" >

<title>Registration</title>

<!--Link to css-->
<link rel = "stylesheet" href="">
</head>
<body>

<div class = "container padding-top-10">
<div class = "panel panel-default">
<div class = "panel-heading"><h2>Sign Up</h2><a href = "index2.php"><img src = "door.png" style="width:2em; height:2em;"></a>
</div>
<div class = "panel-body">
<form  action = "backend1.php" method = "POST" enctype = "multipart/form-data">
<?php include('error.php'); ?>
<h3>Personal Information</h3>
<label for "firstName" class = "control-label">Name:</label>
<div class = "row">
<div class = "col-md-6">
<input type = "text" class = "form-control" name = "firstName" placeholder = "First" required/>
</div>
<div class = "col-md-6">
<input type = "text" class = "form-control" name = "lastName" placeholder = "Last" required/>
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
<input type = "text" class = "form-control" name = "district" placeholder = "district" required/>
</div>
<div class = "col-md-6 padding-top-10">
<label for = "locality" class = "control-label">
Locality:</label>
<input type = "text" class = "form-control" name = "locality" placeholder = "address" required/>
</div>
</div>
<div class = "row">
<div class = "col-md-6 padding-top-10">
<label for = "contactNum" class = "control-label">
Contact Number:</label>
<input type = "text" class = "form-control" name = "contactNum" placeholder = "contact Number" required/>
</div>
<div class = "col-md-6 padding-top-10">
<label for = "emailAdd" class = "control-label">
Email Address:</label>
<input type = "text" class = "form-control" name = "emailAdd" placeholder = "Email"/>
</div>
</div>
<div class = "row">
<div class = "col-md-4 padding-top-10">
<label for = "id_number" class = "control-label">
ID Number:</label>
<input type = "text" class = "form-control" name = "id_number" placeholder = "Id Number" required/>
</div>
<div class = "col-md-4 padding-top-10">
<label for = "password" class = "control-label">
Password:</label>
<input type = "password" class = "form-control" name = "password" placeholder = "password" required/>
</div>
<div class = "col-md-4 padding-top-10">
<label for = "conf_password" class = "control-label">
Confirm Password:</label>
<input type = "password" class = "form-control" name = "conf_password" placeholder = "password" required/>
</div>
</div>
<div class = "row">
<div class = "col-md-8 padding-top-10">
<label for = "file" class = "control-label">
Passport pic:</label>
<input type = "file" name = "foto1" />
</label>
</div>
</div>
<h3>Farm Information</h3>
<div class = "row">
<div class = "col-md-6">
<label for = "farmLocation" class = "control-label">Farm location:</label>
<input type = "text" class = "form-control" name = "farmLocation" placeholder = "location" required/>
</div>
<div class = "col-md-6 padding-top-10">
<label for = "farmSize" class = "control-label">Farm Size:</label>
<input type = "text" class = "form-control" name = "farmSize" placeholder = "farmSize in acreage" />
</div>
</div>
<div class = "row">
<div class = "col-md-3">
<label for = "cat1" class = "control-label">Crop 1 Category:</label>
<select name = "cat1" class = "form-control">
<option value = "0">None</option>
<option value = "1">Cereals</option>
</select>
</div>
<div class = "col-md-3">
<label for = "crop1" class = "control-label">Crop:</label>
<select name = "crop1" class = "form-control">
<option value = "0">None</option>
<option value = "1">Rice</option>
<option value = "2">Maize</option>
<option value = "3">Millet</option>
<option value = "4">Oats</option>
<option value = "5">Barley</option>
<option value = "6">Wheat</option>
</select> 
</div>
<div class = "col-md-3">
<label for = "cropVar1" class = "control-label">Crop Variety:</label>
<input type = "text" class = "form-control" name = "cropVar1" placeholder = "Maize(Abontem)" /> 
</div>
<div class = "col-md-3">
<label for = "health1" class = "control-label">Crop Health:</label>
<select name = "health1" class = "form-control">
<option value = "0">None</option>
<option value = "1">Excellent</option>
<option value = "2">Good</option>
<option value = "3">Moderate</option>
<option value = "4">Poor</option>
</select> 
</div>
</div>
<div class = "row">
<div class = "col-md-3">
<label for = "cat2" class = "control-label">Crop 2 Category:</label>
<select name = "cat2" class = "form-control">
<option value = "0">None</option>
<option value = "2">Legume</option>
</select>
</div>
<div class = "col-md-3">
<label for = "crop2" class = "control-label">Crop:</label>
<select name = "crop2" class = "form-control">
<option value = "0">None</option>
<option value = "7">Lentil</option>
<option value = "8">Peanut</option>
<option value = "9">Beans</option>
<option value = "10">Pea</option>
</select> 
</div>
<div class = "col-md-3">
<label for = "cropVar2" class = "control-label">Crop Variety:</label>
<input type = "text" class = "form-control" name = "cropVar2" placeholder = "Maize(Abontem)" /> 
</div>
<div class = "col-md-3">
<label for = "health2" class = "control-label">Crop Health:</label>
<select name = "health2" class = "form-control">
<option value = "0">None</option>
<option value = "1">Excellent</option>
<option value = "2">Good</option>
<option value = "3">Moderate</option>
<option value = "4">Poor</option>
</select> 
</div>
</div>
<div class = "row">
<div class = "col-md-3">
<label for = "cat3" class = "control-label">Crop 3 Category:</label>
<select name = "cat3" class = "form-control">
<option value = "0">None</option>
<option value = "3">Fruits</option>
</select>
</div>
<div class = "col-md-3">
<label for = "crop3" class = "control-label">Crop:</label>
<select name = "crop3" class = "form-control">
<option value = "0">None</option>
<option value = "11">Apples and Pears</option>
<option value = "12">Citrus</option>
<option value = "13">Berries</option>
<option value = "14">Melons</option>
<option value = "15">Tropical & Exotic</option>
<option value = "16">tomato & avocado</option>
</select> 
</div>
<div class = "col-md-3">
<label for = "cropVar3" class = "control-label">Crop Variety:</label>
<input type = "text" class = "form-control" name = "cropVar3" placeholder = "Maize(Abontem)" /> 
</div>
<div class = "col-md-3">
<label for = "health3" class = "control-label">Crop Health:</label>
<select name = "health3" class = "form-control">
<option value = "0">None</option>
<option value = "1">Excellent</option>
<option value = "2">Good</option>
<option value = "3">Moderate</option>
<option value = "4">Poor</option>
</select> 
</div>
</div>
<div class = "row">
<div class = "col-md-3">
<label for = "cat4" class = "control-label">Crop 4 Category:</label>
<select name = "cat4" class = "form-control">
<option value = "0">None</option>
<option value = "4">Vegetables</option>
</select> 
</div>
<div class = "col-md-3">
<label for = "crop4" class = "control-label">Crop:</label>
<select name = "crop4" class = "form-control">
<option value = "0">None</option>
<option value = "17">leafy</option>
<option value = "18">root</option>
<option value = "19">pepper</option>
<option value = "20">allium</option>
<option value = "21">marrow</option>
</select>
</div>
<div class = "col-md-3">
<label for = "cropVar4" class = "control-label">Crop Variety:</label>
<input type = "text" class = "form-control" name = "cropVar4" placeholder = "Maize(Abontem)" /> 
</div>
<div class = "col-md-3">
<label for = "health4" class = "control-label">Crop Health:</label>
<select name = "health4" class = "form-control">
<option value = "0">None</option>
<option value = "1">Excellent</option>
<option value = "2">Good</option>
<option value = "3">Moderate</option>
<option value = "4">Poor</option>
</select> 
</div>
</div>
<div class = "row">
<div class = "col-md-3">
<label for = "cat5" class = "control-label">Crop 5 Category:</label>
<select name = "cat5" class = "form-control">
<option value = "0">None</option>
<option value = "5">Root & Tuber Crops</option>
</select>
</div>
<div class = "col-md-3">
<label for = "crop5" class = "control-label">Crop:</label>
<select name = "crop5" class = "form-control">
<option value = "0">None</option>
<option value = "22">cassava</option>
<option value = "23">yam</option>
<option value = "24">cocoyam</option>
<option value = "25">sweet potato</option>
</select> 
</div>
<div class = "col-md-3">
<label for = "cropVar5" class = "control-label">Crop Variety:</label>
<input type = "text" class = "form-control" name = "cropVar5" placeholder = "Maize(Abontem)" /> 
</div>
<div class = "col-md-3">
<label for = "health5" class = "control-label">Crop Health:</label>
<select name = "health5" class = "form-control">
<option value = "0">None</option>
<option value = "1">Excellent</option>
<option value = "2">Good</option>
<option value = "3">Moderate</option>
<option value = "4">Poor</option>
</select> 
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
<div class = "col-md-3">
<label for = "crop" class = "control-label">Crop 3 Image:</label>
<input type = "file" name = "foto5" />
</div>
</div>
<div class = "row">
<div class = "col-md-6">
<label for = "crop" class = "control-label">Crop 4 Image:</label>
<input type = "file" name = "foto6" />
</div>
<div class = "col-md-6">
<label for = "crop" class = "control-label">Crop 5 Image:</label>
<input type = "file" name = "foto7" />
</div>
</div>
<div class = "row">
<div class = "col-md-6 padding-top-10">
<label for = "aeaName" class = "control-label">Name of Agriculture Extension Agent:</label>
<input type = "text" class = "form-control" name = "aeaName" placeholder = "Name of Officer" required/>
</div>
<div class = "col-md-6 padding-top-10">
<label for = "aeaNo" class = "control-label">Officer's Number:</label>
<input type = "text" class = "form-control" name = "aeaNo" placeholder = "Officers Number" required/>
</div>
</div>
<h3>Product Cost Information</h3>
<div class = "row">
<div class = "col-md-4">
<label for = "quantity" class = "control-label">Quantity:</label>
<input type = "text" class = "form-control" name = "quantity" placeholder = "Quantity with unit" required/> 
</div>
<div class = "col-md-4">
<label for = "pricing" class = "control-label">Pricing:</label>
<input type = "price" class = "form-control" name = "pricing" placeholder = "Price per unit" required/>
</div>
<div class = "col-md-4">
<label for = "negotiable" class = "control-label">Negotiable:</label>
<select name = "negotiable" class = "form-control">
<option value = "0">None</option>
<option value = "1">Yes</option>
<option value = "2">No</option>
</select>
</div>
</div>
<div class = "row">
<div class = "col-md-12 padding-top-10">
<label for = "comment" class = "control-label">Farm description:</label>
<textarea class = "form-control" rows = "5" name = "comment"></textarea>
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
<div class = "col-md-2">
<button type = "submit" class = "btn btn-success" name = "save">Register</button>
</div>
</div>

</form>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="jquery-3.3.1.min.js"></script>
    <script src=""></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    </div>
    </div>
</body>
</html>