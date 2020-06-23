
<!DOCTYPE html>
<html lang="en">
<head>

	<title>About Computer City</title>
	<?php include("head.php"); ?>

</head>

<body>

	<div class="header"><?php include("header.php"); ?></div>
	<div class="navigation"><?php include("navigation.php"); ?></div>


	<div class="container-fluid mb-4" style="margin-top:10px">

		<div class="container text-center mb-4 mt-4">
			<center><h2><b>Contact with Computer City</b></h2></center>
		</div>

		<div class="row">
			<div class="col-sm-2"></div>

			<div class="col-sm-8" style="background: #F2F2F2">
				<form action="" >
					<div class="form-inline mt-sm-3">
						<label for="name" class="col-sm-3" style="justify-content: flex-start;"><strong>Name:</strong></label>
						<input type="text" class="form-control col-sm-9" id="name" placeholder="Enter Name" name="email">
					</div>
					<div class="form-inline mt-sm-3">
						<label for="email" class="col-sm-3" style="justify-content: flex-start;"><strong>Email Addres:</strong></label>
						<input type="email" class="form-control col-sm-9" id="email" placeholder="Enter Email" name="email">
					</div>
					<div class="form-inline mt-sm-3">
						<label for="message" class="col-sm-3" style="justify-content: flex-start;"><strong>Message:</strong></label>
						<textarea type="textarea" class="form-control col-sm-9" id="message" placeholder="Enter your message here"
						name="message" style="height:200px"></textarea>
					</div>

					<button type="submit" class="btn btn-success col-sm-3 mt-sm-3 mb-sm-3" style="float: right;">Send Message</button>
				</form>
			</div>
			<div class="col-sm-2">

			</div>
		</div>

	</div>



	<div class="newslater">
		<?php include ("newslater.php"); ?>
	</div>


</body>
</html>
