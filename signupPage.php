<?php 
session_start();
if (!isset($_SESSION["sess_email"])) {
 header("Location:authorizePage.php");
}
?>

<!doctype HTML>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="assets/css/fontawesome-all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/forms.css">
<script src="./assets/js/showPsswrd.js"></script>
</head>

<?php 
	include ("signupValidation.php");
?>

<body>

<div class="sheen sheenSignup"></div>
<div class="mediumFormTitle titleBox">
	<div class="centerText">	
		<img src="assets/img/insertImage.png" class="imgLeft" >
		Sign Up 
		<img src="assets/img/insertImage.png" class="imgRight" >
	</div>
</div>
<div class="formBox mediumBox">
	<?php
		include ("signupForm.php");
	?>



</body>
</html>
