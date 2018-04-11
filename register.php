<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gold City Movies</title>

    <meta name="keywords" content="movie,theatre,login" />
    <meta name="description" content="Login to purchase tickets" />
    <link rel="icon" href="">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/jquery-1.11.3.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" rev="stylesheet" type="text/css" media="all" href="./css/login.css">
		<?php include 'css/include.html'; ?>
    <script src="./js/jquery.validate.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container">
    <h1 class="well">Register Account</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form id = "register_account" action ="register_process.php" method = 'post'>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name * (required)</label>
								<input type="text" name = "first_name" placeholder="Enter First Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name *</label>
								<input type="text" name = "last_name" placeholder="Enter Last Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
							<label for="pwd">Password *</label>
			        <input type="password" name = "password" class="form-control" id="password" name="password" placeholder="Password" required>
							</div>
							<div class="col-sm-6 form-group">
							<label for="pwd">Repeat Password *</label>
			        <input type="password" name = "password2" class="form-control" id="password" name="password" placeholder="Password" required>
							</div>
						</div>
						<div class="form-group">
							<label>Street Address</label>
							<textarea placeholder="Enter Address Here.." name = "street" rows="3" class="form-control"></textarea>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" name = "city" placeholder="Enter City Name Here.." class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Postal Code</label>
								<input type="text" name = "pc" placeholder="Enter Zip Code Here.." class="form-control">
							</div>
						</div>
					<div class="form-group">
						<label for "tel">Phone Number</label>
						<input type="tel" name = "phone_number" placeholder="Enter Phone Number Here.." class="form-control">
					</div>
					<div class="form-group">
			        <label for="email">Email *</label>
			        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
			    </div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="card-number">Credit Card Number *</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="credit_card" id="credit_card" placeholder="Credit Card Number" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="expiry-month">Expiration Date *</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="card_expiry" id="card_expiry" placeholder="Credit Card Expiry" required>
						</div>
					</div>
					<button type="submit" class="btn btn-lg btn-info">Register</button>
					<br>
					<a class="extra" href="login.php">Sign In</a><a class="extra" href="logged_in_test.php">Back to homepage</a>
					</div>
				</form>
				</div>
	</div>
	</div>

</body>
</html>
