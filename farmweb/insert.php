<?php


/*
$firstName = $lastName = $gender = $region = $district = $locality = $contactNum = $emailAdd
= $id_number = $password = $conf_password = $target1 = $farmLocation = $farmSize = 
$cat1 = $crop1 = $cropVar1 = $health1 = "";
$cat2 = $crop2 = $cropVar2 = $health2 = "";
$cat3 = $crop3 = $cropVar3 = $health3 = "";
$cat4 = $crop4 = $cropVar4 = $health4 = "";
$cat5 = $crop5 = $cropVar5 = $health5 = "";
$target2 = $target3 = $target4 = $target5 = $aeaName = $aeaTel = $quantity = $pricing = $negotiable =
$comment = "";
*/
class insert extends Dbh{
	protected function inserto(){
		/*Insert into farmerinfo table */
		$sql = "INSERT INTO farmerinfo(firstName, lastName, gender, region, district, locality, tel, email, idNumber, password, passport) 
 		VALUES ('$firstName', '$lastName', '$gender', '$region', '$district', '$locality', '$contactNum', '$emailAdd', '$id_number', '$password', '$target1')";
	
		/*Query the database*/
		$result = $this-> connect()->query($sql);

		/*$sql = "INSERT INTO farmcrop(id, idNumber, location, farmSize, cat1, cat2, cat3, cat4, cat5, crop1, 
		crop2, crop3, crop4, crop5, var1, var2, var3, var4, var5, cropHealth1, cropHealth2, cropHealth3, cropHealth4,
		cropHealth5, farmImg, cropImg1, cropImg2, cropImg3) VALUES ($id_number, $farmLocation, $farmSize, $cat1, $cat2,
		$cat3, $cat4, $cat5, $crop1, $crop2, $crop3, $crop4, $crop5, $cropVar1, $cropVar2, $cropVar3, $cropVar4, $cropVar5,
		$health1, $health2, $health3, $health3, $health4, $health5, $target2, $target3, $target4, $target5)";
		/*Query the database
		$result = $this-> connect()->query($sql);

		$sql = "INSERT INTO aeainfo(idNumber, name, tel) VALUES ($id_number, $aeaName, $aeaTel)";
		/*Query the database
		$result = $this-> connect()->query($sql);

		$sql = "INSERT INTO sellinginfo(idNumber, pricing, negotiate) VALUES ($id_number, $pricing, $negotiate)";
		/*Query the database
		$result = $this-> connect()->query($sql);
		*/
	}
}