
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Transaction</title>

	<?php include("head.php"); ?>

</head>	

<body>

	<div class="header"><?php include("header.php"); ?></div>
	<div class="navigation"><?php include("navigation.php"); ?></div>

	<div class="container mt-5" style="height: 200px;">
		<div class="text-center" style="padding-top: 20px;"> 
			<h2><strong>Payment Information</strong></h2>
		</div>
		<div class="row">

			<div class="col-sm-6 mt-lg-3">
				<div class="text-center">
					<img src="images/bkash.png" width="100" height="50" style="">
				</div>
				<div class="form-inline mt-3" style="margin-left: 135px">
					<span class="badge badge-pill badge-success mr-sm-2" style="font-size: 15px;">bKash</span>
					<span class="badge badge-pill badge-info" style="font-size: 15px;">+88-01721260456</span>
				</div>
			</div>

			<div class="col-sm-6 mt-lg-3">
				<div class="text-center">
					<img src="images/dbbl.png" width="100" height="50" style="">
				</div>
				<div class="form-inline mt-3" style="margin-left: 135px">
					<span class="badge badge-pill badge-success mr-sm-2" style="font-size: 15px;">DBBL</span>
					<span class="badge badge-pill badge-info" style="font-size: 15px;">+88-017212604562</span>
				</div>
			</div>
			
		</div>
		
	</div>


	<div class="container-fluid mt-lg-5 mb-lg-5" style="background: #E9ECEF">
		<div class="row">
			<div class="col-7">
				<div class="row">
					<div class="col-2"></div>
					<div class="col-8">
						<div class="text-center mt-4 mb-4">
							<h4><strong>Transaction Details</strong></h4>
						</div>
						<div>
							<form action="" method="post">
								<div class="form-group">
									<span class="badge badge-pill badge-danger" style="font-size: 15px">bKash/DBBL Account No</span>
									<input type="text" class="form-control form-control-sm" name="account_phone_number" id="account_phone_number" placeholder="01711111111" required style="margin-top: 5px;">
								</div>

								<div class="form-group" style="margin-top: -10px;">
									<span class="badge badge-pill badge-danger" style="font-size: 15px">Trensaction ID</span>
									<input type="text" class="form-control form-control-sm" name="transaction_id" id="transaction_id" placeholder="" required style="margin-top: 5px;">
								</div>
								<input type="hidden" name="shopping_id" value="">
								<a type="button" href="shopping_email.php" class="btn btn-success btn-sm col-4" style="float: right; margin-top: -8px">Confirm</a>
							</form>
						</div>
					</div>
					<div class="col-2"></div>
				</div>
				
			</div>


			<div class="col-5">
				<div class="text-center mt-4 mb-4">
					<h4><strong>Checkout Product Information</strong></h4>
				</div>
				<div>
					<table class="table table-striped table-responsive table-bordered text-center" style="font-size: 
					12px;">
					<thead>
						<tr>
							<th style="width: 45%;font-size: 15px;">Name</th>
							<th style="width: 5%;font-size: 15px;">Quantiy</th>
							<th style="width: 25%;font-size: 15px;">Price</th>
							<th style="width: 25%;font-size: 15px;">Sub-total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Ridmi Note 4</td>
							<td>1</td>
							<td>10000 Taka</td>
							<td>10000 Taka</td>
						</tr>
						<tr>
							<td>Ridmi Note 4</td>
							<td>1</td>
							<td>10000 Taka</td>
							<td>10000 Taka</td>
						</tr>
					</tbody>
					
				</table>
			</div>

			<table class="table table-striped table-bordered text-center">
				<thead>
					<tr>
						<th><span class="badge badge-pill badge-dark" style="font-size: 15px">Flat Shipping Rate</span></th>
						<th><span class="badge badge-pill badge-dark" style="font-size: 15px">Total Amount</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><b>100 Taka</b></td>
						<td><b>20100 Taka</b></td>
					</tr>
				</tbody>
			</table>


		</div>

	</div>
</div>

<div class="newslater">
	<?php include ("newslater.php"); ?>
</div>

</body>
</html>