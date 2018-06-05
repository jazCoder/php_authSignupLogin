<?php 

include ("test_input.php");

// define variables and set to empty values
$newmemberfirstname = $newmemberemail = "";
$firstnameErr = $emailErr = "";
$servername = "servername.com";
$username = "username";
$password = "password";
$dbname = "dbname";


if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if (empty($_POST["newmemberfirstname"])) {
		$firstnameErr = "&emsp;* field is required";
	} else {
		$newmemberfirstname = test_input($_POST["newmemberfirstname"]);
		if (!preg_match("/^[a-z|A-Z|\s]*$/", $firstname)) {
			$firstnameErr="&emsp;* letters and spaces only.";
		} 
	} // close if else block for newmemberfirstname
	
	if (empty($_POST["newmemberemail"])) {
		$emailErr = "&emsp;* email is required";
	} else {
		$newmemberemail = test_input($_POST["newmemberemail"]);
	} // close if else block for email

  // check each field for no error messages before populating database & emailing new member
  if (($firstnameErr=="") && ($emailErr=="")) {
		// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
			if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			} else {
		// create new email entry in AuthKeys database
			$sql_add = "UPDATE AuthKeys SET authemail = '$newmemberemail' WHERE authemail IS NULL ORDER BY id ASC LIMIT 1;"; 
			$result_add = $conn->query($sql_add);
			$sql_getauthkey = "SELECT * FROM AuthKeys WHERE authemail = '$newmemberemail'"; 
			$result_getauthkey = $conn->query($sql_getauthkey);
			$row_getauthkey = $result_getauthkey->fetch_assoc();
			
		//create email variables & mail
			$to = $newmemberemail;
			$subject = "Send new member email Test";
			$txt = "Hello " . $newmemberfirstname . ", your authentication key is: " . $row_getauthkey["authkey"] . ". Sign up by following this link:<br><a href='linkto/authorizePage.php'</a>" ;
			$headers = "From: info@domain.com" . "\r\n";
			mail($to,$subject,$txt,$headers);
		
			}
			$conn->close();	
			
  } //close if else block for errors
	
}  //close if else block for $_POST

