<?php 
session_start();
include ("test_input.php");

// define variables and set to empty values
$firstname = $lastname = $email = $psswrd = $voicepart = "";
$firstnameErr = $lastnameErr = $ $psswrdErr = $emailErr = "";
$servername = "servername";
$username = "username";
$password = "password";
$dbname = "dbname";


if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if (empty($_POST["firstname"])) {
		$firstnameErr = "&emsp;* field is required";
	} else {
		$firstname = test_input($_POST["firstname"]);
		if (!preg_match("/^[a-z|A-Z|\s]*$/", $firstname)) {
			$firstnameErr="&emsp;* letters and spaces only.";
		} 
	} // close if else block for firstname
	
	if (empty($_POST["lastname"])) {
		$lastnameErr = "&emsp;* field is required";
	} else {
		$lastname = test_input($_POST["lastname"]);
		if (!preg_match("/^[a-z|A-Z|\s]*$/", $lastname)) {
			$lastnameErr="&emsp;* letters and spaces only.";
		} 
	} // close if else block for lastname
	
	if (empty($_POST["email"])) {
		$emailErr = "&emsp;* email is required";
	} else {
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr="&emsp;* invalid email format";
		} 
	} // close if else block for email

	if ((empty($_POST["psswrd1"])) || (empty($_POST["psswrd2"]))) {
		$psswrdErr = "* Passwords not complete";
	} else if (($_POST["psswrd1"]) != ($_POST["psswrd2"])) {
		$psswrdErr = "* Passwords did not match";
	} else 	{ 
		$psswrd = password_hash(test_input($_POST["psswrd1"]), PASSWORD_DEFAULT);
	} 
	 // close if else block for password

	if (!empty($_POST["voicepart"])) {
		$voicepart=($_POST["voicepart"]); 
	}
	
	// check each field for no error messages before populating database
	if (($firstnameErr=="") && ($lastnameErr=="") && ($emailErr=="") && ($psswrdErr=="")) {
		// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
			if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			} 
		// Create variable for insertion
			$sql = "INSERT INTO Members (firstname, lastname, email, psswrd, voicepart)
			VALUES ('$firstname', '$lastname', '$email', '$psswrd', '$voicepart')";
		// Insert variable instructions/check success/close connection
			if ($conn->query($sql) === TRUE) {
		    echo "<script type='text/javascript'>
			window.location.href = 'linkto/loginPage.php';
			</script>";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();	
	} 
}


?>
