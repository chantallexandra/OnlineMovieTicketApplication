<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
$_SESSION['logged_in'] = false;
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
	<form class="main-box" role="form" action="login_process.php" method="post">
    <h2 class="form-header">User Login</h2>
    <div class="form-group">
        <label for="email">Email: </label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="pwd">Password: </label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>


    <div class="checkbox">
        <label>
            <input name="remember" value="yes" type="checkbox"> Remember Login
        </label>
    </div>

		<div class="radio">
	  <label><input type="radio" name="login-type" value = "user">User&emsp;</label>
		<label><input type="radio" name="login-type" value = "admin">Admin</label>
		</div>


    <button type="submit" class="btn btn-primary btn-block">Login</button>
    <a class="extra" href="register.php">Sign up</a><a class="extra" href="index.php">Homepage</a>
</form>

<div class="beginning-message" style ="text-align: center; margin-top: 10px; font-size:120%; color: white; background-color: black; font-weight:bold;">
        <p>Application Created By: Chantal Montgomery, Emily Bao, and Yuhan Wang.</p>
        <p>CISC 332 Final Project</p>
        <p style="text-decoration: underline;">Admin Login: </p>
        <p>EMAIL: admin001@test.com PASS: cisc332</p>
        <p>NOTE: Admin database functionality is disabled.</p>         
</div>

</body>
</html>
