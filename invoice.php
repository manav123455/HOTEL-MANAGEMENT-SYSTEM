<?php
include "pdo.php";
session_start();

$b=$_SESSION['name'];
$c=$_SESSION['email'];
$d=$_SESSION['no'];

$e=$_SESSION['room_type'];
$f=$_SESSION['amount'];

$stmt=$pdo->query("SELECT * FROM invoice WHERE amount='".$_SESSION['amount']." ' " );

 while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
   $date=$row['check_out'];
$invoice=$row['i_id'];
 }

?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="css/invoice.css">
		
		
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address>
				<p>SOMS HOTEL</p>
				<p>MUMBAI <br>MAHARASHTRA, INDIA</p>
				<p>9892353819</p>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p>SOMS HOTEL<br></p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span ><?php echo $invoice; ?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo $date; ?></span></td>
				</tr>
				
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Customer Name</span></th>
						<th><span >Room Type</span></th>
						
						
						
                        <th><span>Total Amount</span></th>
					</tr>
				</thead>
				 
				<tbody>
					<tr>
						<td><a class="cut">-</a><span ><?php echo $b; ?></span></td>
						<td><span > <?php echo $e; ?></span></td>
						
						
						<td><span ><?php echo $f; ?></span><span></span></td>
					</tr>
				</tbody>
				   
			</table>
			
			</table>
		</article>
		<aside>
			<h1>THANKYOU VISIT AGAIN</h1>
			
		</aside>
	</body>
</html>