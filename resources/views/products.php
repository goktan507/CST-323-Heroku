<?php
use App\Security\SecurityService;
?>
<head>
<title>Products</title>
<link rel="stylesheet" type="text/css" href="resources/views/format.css">
</head>
<body>
<?php
include 'resources/views/navbar.php';
$securityService = new SecurityService();
$products = $securityService->getProducts();

?>
<div class='form-container' style='text-align: center'>
		<h1>Products List</h1>

		<div align="center">
			<table>
				<tr align="center">
					<th align="center">ID</th>
					<th align="center">Type</th>
					<th align="center">Category</th>
					<th align="center">Brand</th>
					<th align="center">Size</th>
					<th align="center">Hz Rate</th>
					<th align="center">Power</th>
					<th align="center">Price</th>
					<th align="center">Connectivity</th>
				</tr>
<?php
for ($x = 0; $x < count($products); $x ++) {
    echo "<tr align='center'>";
    echo "<td>" . $products[$x][0] . "</td>" . "<td>" . $products[$x][1] . "</td>" . "<td>" . $products[$x][2] . "</td>" . "<td>" . " " . $products[$x][3] . " " . "</td>" . "<td>" . " " . $products[$x][4] . " " . "</td>" . "<td>" . " " . $products[$x][5] . " " . "</td>" . "<td>" . " " . $products[$x][6] . " " . "</td>" . "<td>" . " $" . $products[$x][7] . " " . "</td>" . "<td>" . " " . $products[$x][8] . " " . "</td>";
    echo "</tr>";
}

?>
			</table>
		</div>
	</div>
</body>