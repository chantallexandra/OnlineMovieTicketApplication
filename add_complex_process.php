<!DOCTYPE html>
<html>
<head>
	<?php include 'header-admin.php';?>

	<link rel="stylesheet" type="text/css" href="./css/chantal.css">
	
	<link rel="stylesheet" type="text/css" href="./css/members.css">

	<title>Add Complex</title>
</head>

<body>
<?php
	$complex_name = $_POST["complex_name"];                      
	$street = $_POST["street"];
	$city = $_POST["city"];
	$pc = $_POST["pc"];
	$phone_num = $_POST["phone_num"];
	$theatre_num = $_POST["theatre_num"];
	$max_seats = $_POST["max_seats"];
	$screen_size = $_POST["screen_size"];

	// Create connection
	$conn = new mysqli("localhost","root","","332project");
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO theatre values ('$complex_name','$street','$city','$pc',$phone_num,
	$theatre_num,$max_seats,'$screen_size')";

	if ($conn->query($sql) === TRUE) { ?>
		<span style="text-align: center;">
			<h3>Complex Added Successfully</h3>
			<a href="add_complex.php" style="margin-left: 44%"><button type="button" class="btn btn-default">Add Another Complex</button></a>
		</span>	

	<?php
	} else {
	    echo "Could not add complex";
	}

	$conn->close();
?>

</body>
</html>