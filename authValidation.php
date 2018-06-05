<?php

session_start();
include("test_input.php");

// define variables and set to empty values
$authemail = $authkey = "";
$usrnameErr = "";
$psswrdErr = "";
$authemailErr = "";
$servername = "server address";
$username = "username";
$password = "password";
$dbname = "dbname";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (empty($_POST["authemail"])) {
		$authemailErr = "* email is required";
	} else {
		$authemail = test_input($_POST["authemail"]);
	} // close if block for authemail
	
	if (empty($_POST["authkey"])) {
		$authkeyErr = "* authentication key is required";
	} else {
		$authkey = test_input($_POST["authkey"]);
	} // close if block for authkey
	
	// NEXT TO DO : query database for email and authkey match
	if (($authemailErr=="") && ($authkeyErr=="")) {
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
			if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			} 
		// Check email exists
		$sql1="SELECT * FROM AuthKeys WHERE authemail = '$authemail'";
		$result1 = $conn->query($sql1);
		$row1 = $result1->fetch_assoc();
		
		$newauthkey=(bin2hex(random_bytes(4)));
		$sql3="DELETE FROM AuthKeys WHERE authemail = '$authemail'";
		$sql4="INSERT INTO AuthKeys (authkey) VALUES ('$newauthkey')";
		
		if (!($authkey == $row1["authkey"])) {
			$authemailErr="* email not recognised";
		} else if (!($authkey == $row1["authkey"])) {
			$authkeyErr = "* authentication key not recognised";
		}	else {
			$_SESSION["sess_email"]=$authemail;
			$conn->query($sql3);
			$conn->query($sql4);
			echo "<script type='text/javascript'>
			window.location.href = 'targetfile_on success.php';
			</script>";
		}	
		
	} // end connection if block

} // end $_POST if block

?>
