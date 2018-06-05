<?php 
session_start();
include ("test_input.php");

// define variables and set to empty values
$email = $psswrd = "";
$emailErr = "";
$psswrdErr = "";
$servername = "servername";
$username = "username";
$password = "password";
$dbname = "dbname";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (empty($_POST["email"])) {
		$emailErr = "* email address is required";
	} else {
		$email = test_input($_POST["email"]);
	} // close if block for email
	
	if (empty($_POST["psswrd"])) {
		$psswrdErr = "* password is required";
	} else {
		$psswrd = test_input($_POST["psswrd"]);
	} // close if block for empty fields
	
	// NEXT TO DO : query database for password match according to username
	if (($emailErr=="") && ($psswrdErr=="")) {
		// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
			if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			} 
		// Check username exists
		$sql="SELECT * FROM Members WHERE email = '$email'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
			
		if ($result->num_rows==0) {
			$emailErr = "* email address not recognised";;
		} else if (!(password_verify($psswrd, $row["psswrd"]))) {
			$psswrdErr="* password incorrect";		
		} else {
			$_SESSION["sess_firstname"] = $row["firstname"];
			$_SESSION["sess_lastname"] = $row["lastname"];
			$_SESSION["sess_email"] = $row["email"];
			$_SESSION["sess_voicepart"] = $row["voicepart"];
			$_SESSION["sess_ID"] = $row["ID"];
			$_SESSION["sess_admin"] = $row["admin"];
			echo "<script type='text/javascript'>
			window.location.href = 'linkto/targetfile_onsuccess.php';
			</script>"; 
		}	
		
	} // end of connection if block

} // end of $_SERVER if 

?>



