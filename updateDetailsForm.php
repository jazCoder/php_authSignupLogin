<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	<div class="updateInfo">Check your details or change info, then click 'submit' to confirm</div>
	<i class="insideIcon fa fa-user"></i>
	<input type="text" id="firstname" class="inputField" name="newfirstname" autocomplete="off" placeholder="please enter first name" value="<?php echo $_SESSION["sess_firstname"];?>">
	
	<div id="firstnameError-small"><span style="position:relative; top:0.5vh; margin-bottom:-1vh;">&nbsp;<?php echo $firstnameErr;?></div>
	<div id="firstnameError"><?php echo $firstnameErr;?></div>
	
	<br><br>
	
	<i class="insideIcon fa fa-user"></i>
	<input type="text" id="lastname" class="inputField" name="newlastname" autocomplete="off" placeholder="please enter last name" value="<?php echo $_SESSION["sess_lastname"];?>">
	
	<div id="lastnameError-small"><span style="position:relative; top:0.5vh;">&nbsp;<?php echo $lastnameErr;?></div>
	<div id="lastnameError"><?php echo $lastnameErr;?></div>
	<br><br>
	
	<i class="insideIcon mailIcon fa fa-envelope"></i>
	<div id="emailBox">
	<input type="text" id="emailname" class="mailField" name="newemail" placeholder="please enter new email" value="<?php echo $_SESSION["sess_email"];?>">
	
	<div id="emailError-small"><span style="position:relative; top:0.5vh;">&nbsp;<?php echo $emailErr;?></div>
	<div id="emailError"><?php echo $emailErr;?></div>
	</div>
	<br>
	
	<div>
	<i class="insideIcon fa fa-lock"></i>
	<input type="password" class="psswrdField" name="oldpsswrd" id="oldusrPsswrd" 
	placeholder="enter current password" value="<?php echo $psswrd1;?>">
	<div id="psswrdError-small"><span style="position:relative; top:0.5vh;">&nbsp;<?php echo $psswrdErr;?></div>
	<div id="psswrdError"><?php echo $psswrdErr;?></div>
	</div>
	<br>
	
	<div class="flex-center">
	<i class="insideIcon fa fa-lock"></i>
	<input type="password" class="inputField" name="newpsswrd1" id="newusrPsswrd1" 
	placeholder="new password (or leave empty)" value="<?php echo $newpsswrd1;?>">
	
	<i class="insideIconRight fa fa-lock"></i>
	<input type="password" class="inputField" name="newpsswrd2" id="newusrPsswrd2" 
	placeholder="confirm new password?" value="<?php echo $newpsswrd2;?>">
	
	</div>
	<br>
	
	<div class="flex-center-all">
		<div class="checkBox"><input type="checkbox" onclick="showUpdatePsswrd()">
		<span style="position:relative; top:-0.5vh; color: #ccc;">Show Passwords</span></div>
		<div class="error"><span style="position:relative; top:-1vh;"><?php echo $newpsswrdErr;?></span></div>
	</div>
	
	<div id="voiceparts">
		
		<div class="flex-center flex-center-small extraPadding extraPaddingBottom voiceText">	
			<div>
			<input type="radio" name="newvoicepart" 
			<?php if (isset($_SESSION["sess_voicepart"]) && ($_SESSION["sess_voicepart"])=="soprano1") echo "checked";?> 
			value="soprano1"><span style="position:relative; top:-0.5vh;">1st soprano</span>
			</div>
			<div>
			<input type="radio" name="newvoicepart" 
			<?php if (isset($_SESSION["sess_voicepart"]) && ($_SESSION["sess_voicepart"])=="soprano2") echo "checked";?>
			value="soprano2"><span style="position:relative; top:-0.5vh;">2nd soprano</span>
			</div>
			<div>
			<input type="radio" name="newvoicepart" 
			<?php if (isset($_SESSION["sess_voicepart"]) && ($_SESSION["sess_voicepart"])=="alto1") echo "checked";?>
			value="alto1"><span style="position:relative; top:-0.5vh;">1st alto</span>
			</div>
			<div>
			<input type="radio" name="newvoicepart" 
			<?php if (isset($_SESSION["sess_voicepart"]) && ($_SESSION["sess_voicepart"])=="alto2") echo "checked";?>
			value="alto2"><span style="position:relative; top:-0.5vh;">2nd alto</span>
			</div>
			<div>
			<input type="radio" name="newvoicepart" 
			<?php if (isset($_SESSION["sess_voicepart"]) && ($_SESSION["sess_voicepart"])=="tenor") echo "checked";?>
			value="tenor"><span style="position:relative; top:-0.5vh;">tenor</span>
			</div>
			<div>
			<input type="radio" name="newvoicepart" 
			<?php if (isset($_SESSION["sess_voicepart"]) && ($_SESSION["sess_voicepart"])=="bass") echo "checked";?>
			value="bass"><span style="position:relative; top:-0.5vh;">bass</span>
			</div>		
		</div>
	</div><!-- voiceparts -->
		
	<div id="updateButton" class="flex-center-all">	
		<input type="submit" id="subButton" class="subButton thinButton" name="submit" value="submit">
		<form>
		<input type="button" id="supportButton" class="supportButton thinButton" name="submit"
		 onclick="window.location.href='mailto:support@domain.com'" value="&#xf0e0; support">
		</form>
	</div>
	
	
	
	</form>
	
	
	
	
	
	
