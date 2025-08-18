<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Naye Soch Naya Kadam Payment Page </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="getwaye/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		#paytm_forms {
			padding: 20px;
		}
		#footer {
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<h1 class="text-center">Paytm payment gateway </h1>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form method="post" action="getwaye/pgRedirect.php" id="paytm_forms" class="form-horizontal text-center">
					<div class="form-group">
				      	<label class="control-label col-sm-4" for="ORDER_ID">Order Id :</label>
				      	<div class="col-sm-8">
							<input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" class="form-control" autocomplete="off" value="<?php echo  $_POST['oder'];?>" readonly>
				      	</div>
				    </div>

				    <div class="form-group">
				      	<label class="control-label col-sm-4" for="CUST_ID">Customer Id :</label>
				      	<div class="col-sm-8">
							<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" class="form-control" autocomplete="off" value="<?php echo  $_POST['mobile'];?>"readonly>
				      	</div>
				    </div>

				    <div class="form-group">
				      	<div class="col-sm-8">
							<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" type="hidden" name="INDUSTRY_TYPE_ID" class="form-control" autocomplete="off" value="Retail">
				      	</div>
				    </div>
				
				        <div class="form-group">
				      	<div class="col-sm-8">
							<input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" type="hidden" name="CHANNEL_ID" autocomplete="off" class="form-control" value="WEB" >
				      	</div>
				    </div>

				    <div class="form-group">
				      	<label class="control-label col-sm-4" for="CHANNEL_ID"> Amount :</label>
				      	<div class="col-sm-8">
							<input title="TXN_AMOUNT" tabindex="10" class="form-control" name="" value="<?php echo  $_POST['amout'];?>"readonly>
				      	</div>
				    </div>
				    <?php $oamount=$_POST['amout'];
				            $service=$oamount*11/100;
				            $namount=$service*18/100;
				            $famount=round($oamount+$namount+$service);
				    ?> <div class="form-group">
				      	<label class="control-label col-sm-4" for="CHANNEL_ID">Commission or  servic charge 11 % :</label>
				      	<div class="col-sm-8">
							<input title="" tabindex="10" class="form-control" name="" value="<?php echo $service;?>"readonly>
				      	</div>
				    </div>
				      <div class="form-group">
				      	<label class="control-label col-sm-4" for="CHANNEL_ID">GST On Commission or servic charge 18% :</label>
				      	<div class="col-sm-8">
							<input title="" tabindex="10" class="form-control" name="" value="<?php echo $namount;?>"readonly>
				      	</div>
				    </div>
				     <div class="form-group">
				      	<label class="control-label col-sm-4" for="CHANNEL_ID">Final Amount :</label>
				      	<div class="col-sm-8">
							<input title="TXN_AMOUNT" tabindex="10" class="form-control" name="TXN_AMOUNT" value="<?php echo $famount;?>"readonly>
				      	</div>
				    </div>

				    <button type="submit" class="btn btn-success">Pay</button>
				</form>
				<div class="col-md-12">
					<div class="alert alert-danger text-center"> All fields are mandatory. </div>
				</div>
			</div>
		</div>
	</div>
	<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>&copy; <?php echo date('Y');?> by <b><a href="http://rajmunnitechnology.com">RajMunni Technology</a></b>. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</section>
	</form>
	<script src="getwaye/js/jquery.min.js"></script>
	<script src="getwaye/js/bootstrap.min.js"></script>
</body>
</html>