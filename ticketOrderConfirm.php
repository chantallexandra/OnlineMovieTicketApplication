<!DOCTYPE html>
<html>
<head>
	  <title>Gold City Movies</title>
	  <?php require_once("header.php"); ?>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./css/ticketOrder.css">
    <script type="text/javascript" src="./js/chantal.js"></script>
</head>
<body><?php



if(isset($_POST['purchase'])){ //check if form was submitted
		$movie_title = $_POST['movie_title'];
		$start_time = $_POST['start_time'];
		$theatre_num = $_POST['theatre_num'];
		$complex_name = $_POST['complex_name'];
		$account_number = $_SESSION['account_number'];
	  
	    $numTickets = $_POST['numTickets'];
	    $mysqli = new mysqli("localhost","root","","332project");
		if($mysqli->connect_error){
			die("Connection Failed: ".$mysqli->connect_error);
		}

		$stmt = $mysqli->prepare("INSERT INTO `going_to` VALUES ('$account_number', '$movie_title', '$start_time', $theatre_num, '$complex_name', $numTickets);");

		$stmt->execute();
		$stmt->close();

		$stmt2 = $mysqli->prepare("UPDATE showing SET `num_seats` = `num_seats` - $numTickets WHERE `$theatre_num` = '$theatre_num' and `start_time` = '$start_time' and `complex_name` = '$complex_name';");

		$stmt2->execute();
		$stmt2->close();


		$message = "You're going to see $movie_title!";
 
	}else{
	    $message="Purchase Failed";
	}
?>
<div id="wrapper">
  <div id="container">
  	<h3 style="text-align: center; margin-top: 25%;"><?php echo $message; ?></h3>
    </div>


</div>
	

</body>
</html>