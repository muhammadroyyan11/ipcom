<?php

//index.php

$message = '';

$connect = new PDO("mysql:host=localhost;dbname=ospo610", "root", "");

function fetch_product_data($connect)
{
	$yesterday = DATE('Y.m.d', time()-86400);
	$kemarin = DATE('2019.12.31');
	date_default_timezone_set('Asia/Jakarta');
	$query = "SELECT
  ospos_items.category,
  ospos_sales.sale_time, 
 SUM(ospos_sales_items.quantity_purchased) AS jumlah,
 ospos_sales_items.discount * ospos_sales_items.item_unit_price * 0.01 AS disc,
  sum(ospos_sales_items.quantity_purchased * ospos_sales_items.item_unit_price) * (100 - ospos_sales_items.discount) * 0.01 AS subtotal
FROM ospos_sales_items
  INNER JOIN ospos_sales
    ON ospos_sales_items.sale_id = ospos_sales.sale_id
  INNER JOIN ospos_items
    ON ospos_sales_items.item_id = ospos_items.item_id
  GROUP BY ospos_sales.sale_time
  HAVING SUM(ospos_sales.sale_status = 0) AND DATE(ospos_sales.sale_time) = DATE('2019.12.31')
    ORDER BY ospos_items.category ASC";

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$totalAmount = '';
	$totalQty = '';
	$totalDisc = '';
	$no = 0;
	$output = '
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<tr>
				<th><center>No.</center></th>
				<th><center>Product Categories</center></th>
				<th><center>Qty</center></th>
				<th><center>Discount</center></th>
				<th><center>Jumlah</center></th>
			</tr>
	';
	foreach ($result as $row) {
		$no++;
		$output .= '
			<tr>
				<td><center>' . $no . '</center></td>
				<td><center>' . $row["category"] . '</center></td>
				<td><center>' . number_format($row["jumlah"]) . '</center></td>
				<td><center>' . number_format($row["disc"]) . '</center></td>
				<td><center>' . number_format($row["subtotal"]) . '</center></td>
			</tr>			
		';
		$totalAmount += $row["subtotal"];
		$totalQty += $row["jumlah"];
		$totalDisc += $row["disc"];
	}
	$output .= '
	

	<tr>
			<td colspan="2"><center><b>TOTAL</b></center></td>
			<td><center><b>' . number_format($totalQty) . ' </b></center></td>
			<td><center><b>' . number_format($totalDisc) . ' </b></center></td>
			<td><center><b>' . number_format($totalAmount) . ' </b></center></td>
			</tr>
		</table>
	</div>
	';
	return $output;
}

if (isset($_POST["action"])) {
	include('pdf.php');
	$file_name = md5(rand()) . '.pdf';
	$html_code = '<link rel="stylesheet" href="bootstrap.min.css">';
	$html_code .= fetch_product_data($connect);
	$pdf = new Pdf();
	$pdf->load_html($html_code);
	$pdf->render();
	$file = $pdf->output();
	file_put_contents($file_name, $file);

	require 'class/class.phpmailer.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();								//Sets Mailer to send message using SMTP
	$mail->Host = 'ssl://smtp.googlemail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
	$mail->Port = '465';								//Sets the default SMTP server port
	$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
	$mail->Username = 'indienacoffee@gmail.com';					//Sets SMTP username
	$mail->Password = 'indiena2019';					//Sets SMTP password
	$mail->SMTPSecure = '';							//Sets connection prefix. Options are "", "ssl" or "tls"
	$mail->From = 'indienacoffee@gmail.com';			//Sets the From email address for the message
	$mail->FromName = 'Indiena Coffee';			//Sets the From name of the message
	$mail->AddAddress('kamabarus@gmail.com', 'Name');		//Adds a "To" address
	$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
	$mail->IsHTML(true);							//Sets message type to HTML				
	$mail->AddAttachment($file_name);     				//Adds an attachment from a path on the filesystem
	$mail->Subject = 'Product Details';			//Sets the Subject of the message
	$mail->Body = 'Please Find Sales by Categories in attach PDF File.';				//An HTML or plain text message body
	if ($mail->Send())								//Send an Email. Return true on success or false on error
	{
		$message = '<label class="text-success"> Silahkan check email Ibu untuk mendownload Laporan Harian!</label>';
	}
	unlink($file_name);
}

?>
<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Laporan Penjualan Indiena Coffee</title>
	<script src="jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="bootstrap.min.js"></script>
</head>

<body>
	<br />
	<div class="container">
		<?php 
		date_default_timezone_set('Asia/Jakarta');
		$yesterday = date("d-m-Y", time()-86400);
		?>
		<h3 align="center">Laporan Penjualan Indiena Coffee Tanggal <?php echo $yesterday ?></h3>
		<br />
		<form method="post">
			<input type="submit" name="action" class="btn btn-danger" value="PDF Send" /><?php echo $message; ?>
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