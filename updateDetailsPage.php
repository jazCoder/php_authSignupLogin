<!doctype HTML>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="assets/css/fontawesome-all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/forms.css">

<script src="./assets/js/showUpdatePsswrd.js"></script>
</head>

<?php 
	include ("updateDetailsValidation.php");
?>

<body>

<div class="sheen sheenUpdate"></div>
<div class="largeFormTitle titleBox">
	<div class="centerText">	
		<img src="assets/img/insertImage.png" class="imgLeft" >
		Update details 
		<img src="assets/img/insertImage.png" class="imgRight" >
	</div>
</div>
<div class="formBox largeBox">
	<?php
		include ("updateDetailsForm.php");
	?>
</div>

</body>
</html>


