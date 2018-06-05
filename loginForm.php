

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	<i class="insideIcon mailIcon fa fa-envelope"></i>
	<input type="text" id="loginEmail" name="email" class="mailField" 
	placeholder="please enter your email" value="<?php echo $email;?>">
	<div>
	<div id="emailError-small"><span style="position:relative; top:0.5vh;">&nbsp;<?php echo $emailErr;?></div>
	<div id="emailError">&nbsp;<?php echo $emailErr;?></div>
	</div>
	
	<br>
	
	
	<div>
	<i class="insideIcon fa fa-lock"></i>
	<input type="password" name="psswrd" id="logpsswrd" class="psswrdField" value="<?php echo $psswrd;?>"
	placeholder="please enter your password">
	</div>
	<br>
		
	<div class="flex-center-all">
		<div class="checkBox"><input type="checkbox" onclick="showlogpsswrd()">
		<span style="position:relative; top:-0.5vh; color: #ccc;">Show characters</span></div>
		<div class="error"><span style="position:relative; top:-1vh;"><?php echo $psswrdErr;?></span></div>
	</div>
	
	
	
	<div id="authButton" class="flex-center-all">	
		<input type="submit" id="subButton" class="subButton thinnerButton" name="submit" value="log in">
		<form>
		<input type="button" id="supportButton" class="supportButton thinnerButton" name="submit"
		 onclick="window.location.href='mailto:support@domain.com'" value="&#xf0e0; support">
		</form>
	</div>
</form>

</body>
</html>
