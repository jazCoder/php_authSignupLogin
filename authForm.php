<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	
	<i class="insideIcon mailIcon fa fa-envelope"></i>
	<input type="text" id="authemail" name="authemail" class="mailField" 
	placeholder="please enter your email" value="<?php echo $authemail;?>">
	<div>
	<div id="emailError-small"><span style="position:relative; top:0.5vh;">&nbsp;<?php echo $authemailErr;?></div>
	<div id="emailError">&nbsp;<?php echo $authemailErr;?></div>
	
	</div>
	<br>
	
	<div>
	<i class="insideIcon fa fa-lock"></i>
	<input type="password" id="authkey" class="psswrdField" name="authkey"  value="<?php echo $authkey;?>"
	placeholder="enter your authentication key">
	</div>
	<br>
	
	<div class="flex-center-all">
		<div class="checkBox"><input type="checkbox" onclick="showAuthkey()">
		<span style="position:relative; top:-0.5vh; color: #ccc;">Show characters</span></div>
		<div class="error"><span style="position:relative; top:-1vh;"><?php echo $authkeyErr;?></span></div>
	</div>
	
	<div id="authButton" class="flex-center-all">	
		<input type="submit" id="subButton" class="subButton thinnerButton" name="submit" value="submit">
		<form>
		<input type="button" id="supportButton" class="supportButton thinnerButton" name="submit"
		 onclick="window.location.href='mailto:yourname@domain.com'" value="&#xf0e0; support">
		</form>
	</div>
</form>

	
