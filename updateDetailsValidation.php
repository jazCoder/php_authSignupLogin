<?php 
session_start();
include ("test_input.php");

// define variables and set to empty values
$newfirstname = $newlastname = $newemail = $psswrd = $ID = $newvoicepart = "";
$firstnameErr = $lastnameErr = $ $newpsswrdErr = $psswrdErr = $emailErr = "";
$currentID=$_SESSION["sess_ID"];
$servername = "servername";
$username = "username";
$password = "password";
$dbname = "dbname";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if (empty($_POST["newfirstname"])) {
		$firstnameErr = "&emsp;* field is required";
	} else {
		$newfirstname = test_input($_POST["newfirstname"]);
		if (!preg_match("/^[a-z|A-Z|\s]*$/", $newfirstname)) {
			$firstnameErr="&emsp;* letters and spaces only.";
		}
		$_SESSION["sess_firstname"]=$newfirstname; 
	} // close if else block for firstname
	
	if (empty($_POST["newlastname"])) {
		$lastnameErr = "&emsp;* field is required";
	} else {
		$newlastname = test_input($_POST["newlastname"]);
		if (!preg_match("/^[a-z|A-Z|\s]*$/", $newlastname)) {
			$lastnameErr="&emsp;* letters and spaces only.";
		} 
		$_SESSION["sess_lastname"]=$newlastname;
	} // close if else block for lastname
	
	if (empty($_POST["newemail"])) {
		$emailErr = "&emsp;* email is required";
	} else {
		$newemail = test_input($_POST["newemail"]);
		if (!filter_var($newemail, FILTER_VALIDATE_EMAIL)) {
			$emailErr="&emsp;* invalid email format";
		}  
		$_SESSION["sess_email"]=$newemail;
	} // close if else block for email
	
	// CHECK OLD PASSWORD is entered and new passwords match!!
	if (empty($_POST["oldpsswrd"])) {
		$psswrdErr = "&emsp;* current password required";
	} else {
		$psswrd = test_input($_POST["oldpsswrd"]);
	}
	
	if (($_POST["newpsswrd1"]) != ($_POST["newpsswrd2"])) {
		$newpsswrdErr="* new passwords did not match";
	} 
	
	// new voicepart?
	if (!empty($_POST["newvoicepart"])) {
		$newvoicepart=$_SESSION["sess_voicepart"]=($_POST["newvoicepart"]); 
	}
	
	// check each field for no error messages before connecting to database
	if (($firstnameErr=="") && ($lastnameErr=="") && ($emailErr=="") && ($psswrdErr=="") && ($newpsswrdErr=="")) {
		// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
			if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			}
			
		// check old password is correct before doing anything
		$sql="SELECT * FROM Members WHERE ID = '$currentID'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if (!(password_verify($psswrd, $row["psswrd"]))) {
			$psswrdErr="&emsp; * password not recognised.";		
		} else {
			 
			// then update results based on the user ID
			$sql2="UPDATE PVEMembers3 
			SET firstname='$newfirstname',
			lastname='$newlastname',
			email='$newemail',
			voicepart='$newvoicepart'
			WHERE ID = '$currentID' ";
			
			//password update block - separate query! If newpsswrd1 is set then its ok to update
			//there must be no error messages to get this far anyway(!)
						
			if (!empty($_POST["newpsswrd1"])) {
				$psswrdUpdate = password_hash(test_input($_POST["newpsswrd1"]), PASSWORD_DEFAULT);
				$sql3="UPDATE PVEMembers3 SET psswrd='$psswrdUpdate' WHERE ID = '$currentID' ";
				$result3=($conn->query($sql3));
				if ($result3 === TRUE) {
					echo ("Password update successful.<br>");
				} else {
			    echo "Error: " . $sql3 . "<br>" . $conn->error;
				}		
			} 
			
			$result2=($conn->query($sql2));
			if ($result2 === TRUE) {
			  header("Location: originating_page.php");
			} else {
			    echo "Error: " . $sql2 . "<br>" . $conn->error;
			} 
			$conn->close();	
		} // end else block if old psswrd was correct to begin with 
	} 
	
	
} // end of if POST


?>
