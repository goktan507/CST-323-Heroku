<?php
include 'resources/views/navbar.php';
?>
<link rel="stylesheet" type="text/css" href="resources/views/format.css">
<div class="form-container" align="center">
	<br> <br>
	<h3>Registration Form</h3>
	<form action="onRegister" method="POST" >
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"/>
			<?php echo 'First & Last Name:'; ?> <br> <input type="Text" name="nameInput"><br> 
			<br> Username: <br> <input type="Text" name="usernameInput"><br> 
			<br> Email: <br> <input type="Text" name="emailInput"><br> 
			<br> Password: <br> <input type="password" name="passwordInput"><br> <br>

		<button type="submit"
			style="height: 50px; width: 250px; font-size: 20px;">Register</button>
		<br> <br> <a> OR </a> <br> <br> <input type="button"
			style="height: 50px; width: 250px; font-size: 20px;" value="Login"
			id="toLogin"
			onClick="window.location = 'http://localhost/My%20e-Store/loginForm.php'" /><br>
		<br>

	</form>
</div>