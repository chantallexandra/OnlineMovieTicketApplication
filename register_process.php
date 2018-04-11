
<?php
	require 'db.php';
	session_start();
	$_SESSION['logged_in'] == false;
	//get values passed from the login.php file

	if (!empty($_POST)){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$pc = $_POST['pc'];
		$phone_number = $_POST['phone_number'];
		$email = $_POST['email'];
		$credit_card = $_POST['credit_card'];
		$card_expiry= $_POST['card_expiry'];


		//to prevent mysql injection
		$email = stripcslashes($email);
		$password =stripcslashes($password);
		list($y, $m, $d) = explode("-", $card_expiry);
		if(checkdate($m, $d, $y)){
			#ok date
			$good_date = TRUE;
		} else {
			#bad date
			$good_date = FALSE;
			echo "<script type='text/javascript'>alert('Please enter a correct expiry date!');</script>";
		}

	if(is_null($email)){
		echo "<script type='text/javascript'>alert('Please enter an email address!');</script>";
		#header("location: error.php");
	}
	if(is_null($first_name) || is_null($last_name)){
		$_SESSION['message'] = "Please enter your full name";
		#header("location: error.php");
		echo "<script type='text/javascript'>alert('Please enter your full name');</script>";
	}
	if ($password != $password2){
		echo "<script type='text/javascript'>alert('The two password you have entered is different');</script>";
	}

	else{
		$digits = 16;
		$account_number = "";
		for($x = 0; $x < $digits; $x++){
			$account_number = $account_number.rand(0,9);
		}
		//echo "<script type='text'/javascript'>.$account_number. = generateAccount();</script>";



		$sql = "INSERT into customer VALUES ('$account_number','$password','$first_name','$last_name','$street','$city','$pc','$phone_number','$email','$credit_card','$card_expiry')";
		mysqli_query($mysqli,$sql);

		if (mysqli_errno($mysqli) == 1062) {
		    echo "<script type='text/javascript'>alert('A member with this email already exists!'); window.location.href='login.php';</script>";
		}
		 else{
			echo "<script type='text/javascript'>alert('Registration sucessful!');
			window.location.href='login.php';
			</script>";
		}

	}

}//end if
 ?>
