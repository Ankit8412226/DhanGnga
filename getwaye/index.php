<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Poppins', sans-serif;
			background-color: #f4f7f6;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
			padding: 0 10px; /* Add padding for mobile */
		}

		.container {
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			text-align: center;
			width: 100%;
			max-width: 400px;
		}

		.container h1 {
			font-size: 24px;
			color: #333;
			margin-bottom: 10px;
		}

		.container h4 {
			font-size: 16px;
			color: #888;
			margin-bottom: 20px;
		}

		.container .amount {
			font-size: 20px;
			color: #4CAF50;
			font-weight: bold;
			margin-bottom: 20px;
		}

		.container .qrcode-container {
			margin-bottom: 20px;
		}

		#qrcode {
			width: 200px;
			height: 200px;
			margin: 0 auto;
		}

		.payment-icons {
			margin-top: 20px;
			font-size: 40px;
			color: #4CAF50;
		}

		.payment-icons i {
			margin: 0 10px;
		}

		.back-button {
			margin-top: 20px;
			padding: 10px 15px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			text-align: center;
			text-decoration: none; /* Remove underline from anchor */
			display: inline-block; /* Make anchor behave like button */
		}

		.back-button:hover {
			background-color: #45a049;
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.container {
				padding: 20px;
			}

			.container h1 {
				font-size: 20px;
			}

			.container h4 {
				font-size: 14px;
			}

			.container .amount {
				font-size: 18px;
			}

			#qrcode {
				width: 150px;
				height: 150px;
			}

			.payment-icons {
				font-size: 30px;
			}
		}
	</style>
</head>
<body>
    <?php  
		$oamount = $_POST['amout'];
		$service = $oamount * 11 / 100;
		$namount = $service * 18 / 100;
		$famount = round($oamount + $namount + $service);
	?>
	<div class="container">
		<h1>Scan to Pay</h1>
		<h4>Share screenshot in this WhatsApp: 9234692692</h4>
		<div class="amount">Amount: ₹<?php echo $oamount; ?></div>

		<div class="qrcode-container">
			<div id="qrcode"></div>
		</div>

		<div class="payment-icons">
		    <br>
		    <br>
			<i class="fab fa-cc-visa"></i>
			<i class="fab fa-cc-mastercard"></i>
			<i class="fab fa-cc-paypal"></i>
			<i class="fab fa-cc-amazon-pay"></i>
		</div>

		<!-- Back Button as a link -->
		<a href="https://nayesochnayakadam.com/" class="back-button">Go to Home</a>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
	<script>
		// Generate QR code
		window.onload = function() {
			const qrcodeContainer = document.getElementById('qrcode');
			const amount = "<?php echo $oamount; ?>";
			const paymentUrl = `upi://pay?pa=9234692692@icici&pn=PAWAN KUMAR&am=${amount}&cu=INR`;

			new QRCode(qrcodeContainer, {
				text: paymentUrl,
				width: 200,
				height: 200,
			});
		}
	</script>

</body>
</html>
