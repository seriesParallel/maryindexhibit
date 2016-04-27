<!--Theirs-->
<!--<form class="form-foot" action="thank-you.php" method="post">-->
<form name="myform" class="form-foot" action="" method="post">

<fieldset>
<legend>Footer contact form</legend>
<div class="field">
<label for="name">Your name: </label>
<input name="name" id="name" type="text" placeholder="Name" class="required field-name" required>
</div>
<div class="field">
<label for="email">Your email: </label>
<input name="email" id="email" type="email" placeholder="Email address" class="required  field-email" required>
</div>
<div class="field">
<label for="message">Message: </label>
<textarea name="message" id="message" cols="30" rows="8" class="required field-message" placeholder="Your message" required></textarea>
</div>
<div class="field-submit">
<!--<input class="sendbutton" type="submit"/>-->
<input id="submit" class="sendbutton" type="submit"/>
</div>
</fieldset>
</form>


<!--Mine-->
			<form method="post" action="contactengine.php">
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name" />
<br/>
				<label for="Tel">Tel:</label>
				<input type="text" name="Tel" id="Tel" />
<br/>
				<label for="Email">Email:</label>
				<input type="text" name="Email" id="Email" />
<br/>
				<label for="Message">Message:</label><br />
				<textarea name="Message" rows="5" cols="20" id="Message"></textarea>
<br/>
				<input type="submit" name="submit" value="Submit" class="submit-button mybtn" />
			</form>

			<div style="clear: both;"></div>
