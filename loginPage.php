<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="assets/css/fontawesome-all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/forms.css">
<script src="./assets/js/showlogpsswrd.js"></script>

</head>
<?php 
	include ("loginValidation.php");
?>

<body>

<div class="sheen"></div>
<div class="smallFormTitle titleBox">
	<div class="centerText">	
		<img src="assets/img/insertImage.png" class="imgLeft" >
		Members log in 
		<img src="assets/img/insertImage.png" class="imgRight" >
	</div>
</div>
<div class="formBox smallBox">
	<?php
		include ("loginForm.php");
	?>
</div>



</body>
</html>
