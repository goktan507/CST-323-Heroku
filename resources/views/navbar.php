<?php if(!(session_status() == PHP_SESSION_ACTIVE)) session_start();?>
<div align = "center" class = "head">

<br><h2>My e-Store</h2>

</div>

<div class = "tab" align="center">
<?php if(!isset($_SESSION['username'])):?>
&nbsp;  <a href = "index.php" style="text-align:center;">| Home</a>&nbsp;&nbsp; | &nbsp;&nbsp;
		<a href = "login" style="text-align:center;"> Login</a>&nbsp;&nbsp; | &nbsp;&nbsp;
		<a href = "register" style="text-align:center;">Register</a> &nbsp;&nbsp; | &nbsp;&nbsp;
		<a href = "products" style="text-align:center;">Products</a> &nbsp;&nbsp; | &nbsp;&nbsp;
<?php else:?>
		<a style="text-align:left;">Welcome <?php echo $_SESSION['name']?></a>&nbsp; | &nbsp;&nbsp; 
		<a href = "index.php" style="text-align:center;">Home</a>&nbsp;&nbsp; | &nbsp;&nbsp; 
		<a href = "products" style="text-align:center;">Products</a> &nbsp;&nbsp; | &nbsp;&nbsp;
		<form action="logout" method="POST">
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"/>
			<button type="submit">logout</button>
		</form>
<?php endif; ?>
</div>

	