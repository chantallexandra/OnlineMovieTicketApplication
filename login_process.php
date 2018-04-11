<?php
	require 'db.php';
	session_start();
	//get values passed from the index.php file
	$email = $_POST['email'];
	$password = $_POST['password'];

	//to prevent mysql injection
	$email = stripcslashes($email);
	$password =stripcslashes($password);

	if ($_POST['login-type'] == "user"){
		$result = $mysqli->query("SELECT * FROM Customer WHERE email='$email'");
	}else{ // admin
		$result = $mysqli->query("SELECT * FROM Admin WHERE email='$email';");
	}
	if ( $result->num_rows == 0 ){ // User doesn't exist
			$_SESSION['message'] = "User with that email doesn't exist!";
			echo "User with that email doesn't exist!";
			header("location: error.php");
	}
	else { // User exists
			$user = $result->fetch_assoc();

			if ($_POST['password'] == $user['password']) {
			/*if (password_verify($_POST['password'], $user['password']) ) {*/
					$_SESSION['account_number'] = $user['account_number'];
					$_SESSION['email'] = $user['email'];
					$_SESSION['first_name'] = $user['first_name'];
					$_SESSION['last_name'] = $user['last_name'];
					$_SESSION['message'] = "Logged in";

					// This is how we'll know the user is logged in
					$_SESSION['logged_in'] = true;
					if ($_POST['login-type'] == "user"){
						header("location: home.php");
					}else{
						header("location:admin_home.php");
					}
			}
			else {
					echo "You have entered wrong password, try again!";
					$_SESSION['message'] = "You have entered wrong password, try again!";
					$_SESSION['logged_in'] = false;
					header("location: error.php");
			}
	}

 ?>
