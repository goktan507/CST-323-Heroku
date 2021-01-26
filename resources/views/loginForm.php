<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="resources/views/format.css">
<body>
<?php
include 'navbar.php';
?>

<form action="onLogin" method="POST">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"/>
		<div class="form-container" align="center">
			<br>
			<br>
			<h3>Login Form</h3>
			Username: <br> <input type="text" name="userUsername"><br>
			<br> Password: <br> <input type="password" name="userPassword"><br>
			<br>

			<button type="submit"
				style="height: 50px; width: 250px; font-size: 20px;">Login</button>
			<br>
			<br> <a> OR </a><br>
			<br> <input type="button"
				style="height: 50px; width: 250px; font-size: 20px;"
				value="Register" id="toRegister"
				onClick="window.location = 'http://localhost/My%20e-Store/registerForm.php'" />

		</div>
	</form>
</body>