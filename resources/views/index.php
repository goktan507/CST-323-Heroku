<html>
<head>
<meta charset="ISO-8859-1">

<title>My Blog</title>

<link rel="stylesheet" type="text/css" href="resources/views/format.css">

</head>

<body>
<?php
include 'resources/views/navbar.php';
?>
<div align="center">
		<h1>Products are located in 'Products' page</h1>
		<h2>
			Please click <a href='products.php'>here</a> to display all products
		</h2>
<?php if(!isset($_SESSION['username'])):?>
<h2>
			Please <a href="loginForm.php">login</a> first.
		</h2>
<?php else:?>
<h2>
			Have fun with your journey <i><?php echo $_SESSION['name']?></i>
		</h2>
<?php endif?>
</div>
</body>

</html>