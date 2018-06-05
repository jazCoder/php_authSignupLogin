
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	<i class="fa fa-user insideIcon"></i>
	<input type="text" id="firstname" name="firstname" class="inputField" placeholder="please enter first name" value="<?php echo $firstname;?>">
	
	<div id="firstnameError-small"><span style="position:relative; top:0.5vh; margin-bottom:-1vh;">&nbsp;<?php echo $firstnameErr;?></div>
	<div id="firstnameError"><?php echo $firstnameErr;?></div>
	
	<br><br>
	
	<i class="insideIcon fa fa-user"></i>
	<input type="text" id="lastname" name="lastname" class="inputField" placeholder="please enter last name" value="<?php echo $lastname;?>">
	
	<div id="lastnameError-small"><span style="position:relative; top:0.5vh;">&nbsp;<?php echo $lastnameErr;?></div>
	<div id="lastnameError"><?php echo $lastnameErr;?></div>
	<br><br>
	
	<i class="insideIcon mailIcon fa fa-envelope"></i>
	<div id="emailBox">
	<input type="text" id="emailname" name="email" class="mailField" placeholder="please enter email"  value="<?php echo $_SESSION["sess_email"]?>">
	
	<div id="emailError-small"><span style="position:relative; top:0.5vh;">&nbsp;<?php echo $emailErr;?></div>
	<div id="emailError"><?php echo $emailErr;?></div>
	</div>
	<br>
	
	<div class="flex-center">
		<i class="insideIcon fa fa-lock"></i>
		<input type="password" class="psswrdField" name="psswrd1" id="usrPsswrd1" placeholder="enter chosen password" value="<?php echo $psswrd1;?>">
		<i class="insideIconRight fa fa-lock"></i>
		<input type="password" class="psswrdField" name="psswrd2" id="usrPsswrd2" placeholder="repeat password" value="<?php echo $psswrd2;?>">
	</div>
	
	<br>
	
	<div class="flex-center-all">
		<div class="checkBox"><input type="checkbox" onclick="showPsswrd()">
		<span style="position:relative; top:-0.5vh; color: #ccc;">Show Passwords</span></div>
		<div class="error"><span style="position:relative; top:-1vh;"><?php echo $psswrdErr;?></span></div>
	</div>
	
	<div id="voiceparts">
		<div class="voiceTitle"><label>which voice part do you sing?</label></div>
		<div class="flex-center flex-center-small extraPadding voiceText">
			<div>
			<input type="radio" name="voicepart" 
			<?php if (isset($voicepart) && $voicepart=="soprano1") echo "checked";?> 
			value="soprano1"><span style="position:relative; top:-0.5vh;">1st soprano</span>
			</div>
			<div>
			<input type="radio" name="voicepart" 
			<?php if (isset($voicepart) && $voicepart=="soprano2") echo "checked";?>
			value="soprano2"><span style="position:relative; top:-0.5vh;">2nd soprano</span>
			</div>
			<div>
			<input type="radio" name="voicepart" 
			<?php if (isset($voicepart) && $voicepart=="alto1") echo "checked";?>
			value="alto1"><span style="position:relative; top:-0.5vh;">1st alto</span>
			</div>
			<div>
			<input type="radio" name="voicepart" 
			<?php if (isset($voicepart) && $voicepart=="alto2") echo "checked";?>
			value="alto2"><span style="position:relative; top:-0.5vh;">2nd alto</span>
			</div>
			<div>
			<input type="radio" name="voicepart" 
			<?php if (isset($voicepart) && $voicepart=="tenor") echo "checked";?>
			value="tenor"><span style="position:relative; top:-0.5vh;">tenor</span>
			</div>
			<div>
			<input type="radio" name="voicepart" 
			<?php if (isset($voicepart) && $voicepart=="bass") echo "checked";?>
			value="bass"><span style="position:relative; top:-0.5vh;">bass</span>
			</div>
		</div>
	</div><!-- voiceparts -->
		
	<div id="submitButton" class="flex-center-all">	
		<input type="submit" id="subButton" class="subButton thinButton" name="submit" value="join!">
		<form action="mailto:user@user.com">
		<input type="button" id="supportButton" class="supportButton thinButton" name="submit" onclick="window.location.href='mailto:support@domain.com'" value="&#xf0e0; support">
		</form>
	</div>
	</form>
	<br>
