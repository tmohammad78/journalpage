<?php
include("include/db.php");
	if(isset($_POST["btnregister"])){
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$mobile=$_POST["mobile"];
		$major=$_POST["major"];
		
		$insert=$pdo->prepare("INSERT INTO journalproject(first_name,last_name,email,password,mobile,major)
		VALUES(:firstname,:lastname,:email,:password,:mobile,:major)");
		$insert->bindParam(':firstname',$firstname);
		$insert->bindParam(':lastname',$lastname);
		$insert->bindParam(':email',$email);
		$insert->bindParam(':password',$password);
		$insert->bindParam(':mobile',$mobile);
		$insert->bindParam(':major',$major);
		$insert->execute();
	}

			

?>
