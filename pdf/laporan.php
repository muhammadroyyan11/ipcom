<?php

//index.php

$message = '';

$connect = new PDO("mysql:host=localhost;dbname=elearn30_stock", "elearn30_admin", "412y453n4.BRS");

function fetch_product_data($connect)
{
	$query = "SELECT * FROM product";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<tr>
				<th>Products</th>
				<th>Brand</th>
				<th>Categories</th>
			</tr>
	';
	foreach($result as $row)
	{
		$output .= '
			<tr>
				<td>'.$row["product_name"].'</td>
				<td>'.$row["brand_id"].'</td>
				<td>'.$row["categories_id"].'</td>
			</tr>
		';
	}
	$output .= '
		</table>
	</div>
	';
	return $output;
}

if(isset($_POST["action"]))
{
	include('pdf.php');
	$file_name = md5(rand()) . '.pdf';
	$html_code = '<link rel="stylesheet" href="bootstrap.min.css">';
	$html_code .= fetch_product_data($connect);
	$pdf = new Pdf();
	$pdf->load_html($html_code);
	$pdf->render();
	$file = $pdf->output();
	file_put_contents($file_name, $file);

	unlink($file_name);
}

?>
<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Create Dynamic PDF Send As Attachment with Email in PHP</title>
		<script src="jquery.min.js"></script>
		<link rel="stylesheet" href="bootstrap.min.css" />
		<script src="bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<h3 align="center">Create Dynamic PDF Send As Attachment with Email in PHP</h3>
			<br />
			<form method="post">
				<input type="submit" name="action" class="btn btn-danger" value="PDF Send" />
			</form>
			<br />
			<?php
			echo fetch_product_data($connect);
			?>			
		</div>
		<br />
		<br />
	</body>
</html>





