
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Payment</title>

	<?php include("head.php"); ?>

</head>	

<body>

	<div class="header"><?php include("header.php"); ?></div>
	<div class="navigation"><?php include("navigation.php"); ?></div>

	<div class="container mt-5" style="background: #E9ECEF;height: 200px;">
		<div class="text-center" style="padding-top: 20px;"> 
			<h2><strong>Payment Information</strong></h2>
		</div>
		<div class="row">

			<div class="col-sm-6 mt-lg-3">
				<div class="text-center">
					<img src="images/bkash.png" width="100" height="50">
				</div>
				<div class="form-inline mt-3 mr-4" style="justify-content: center;">
					<span class="badge badge-pill badge-danger mr-sm-2" style="font-size: 15px;">bKash</span>
				</div>
			</div>

			<div class="col-sm-6 mt-lg-3">
				<div class="text-center">
					<img src="images/dbbl.png" width="100" height="50">
				</div>
				<div class="form-inline mt-3 ml-3" style="justify-content: center;">
					<span class="badge badge-pill badge-danger mr-sm-2" style="font-size: 15px;">DBBL</span>
				</div>
			</div>
			
		</div>
		
	</div>

	<div class="container mt-lg-5 mb-lg-5" style="background: #E9ECEF">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-9">
				<form action="/action_page.php">
					<div class="form-inline" style="padding-top: 30px;">
						<label class="mr-3 mt-sm-1" for="payment_method"><h5><strong>Payment Method:</strong></h5></label>
						<select class="form-control form-control-sm col-5" name="payment_method" id="payment_method" required style="width: ;">
							<option value="">Select Payment Method</option>
							<option value="bkash">Bkash</option>
							<option value="dbbl">DBBL</option>
						</select>
					</div>
					<a type="button" href="transaction.php" class="btn btn-success col-sm-2 btn-sm mt-1" style="float: right; margin-right: 298px;margin-bottom: 30px;"><strong>Confirm</strong></a>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="newslater">
	<?php include ("newslater.php"); ?>
</div>

</body>
</html>
