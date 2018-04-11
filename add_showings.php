<!DOCTYPE html>
<html lang="en">
<head>
    
<?php include 'header-admin.php';?>
	<link rel="stylesheet" type="text/css" href="./css/chantal.css">
    
	<link rel="stylesheet" type="text/css" href="./css/members.css">
	<title>Add Showing</title>

</head>

<body>

<div class="container">
  <span style="text-align: center;"><h3 >Add a Showing</h3></span>
  <form action="add_showings_process.php" method="post">
    <label >Movie Title</label>
    <input type="text" name="movie_title" placeholder="title">

    <label >Start Time</label>
    <input type="text" name="start_time" placeholder="YYYY-MM-DD 00:00:00">

	<label >End Time</label>
    <input type="text" name="end_time" placeholder="YYYY-MM-DD 00:00:00">
	
    <label>Theatre Number</label>
    <input type="text" name="theatre_num" placeholder="theatre number">

    <label>Number of Seats</label>
    <input type="text" name="num_seats" placeholder="number of seats">

    <label>Complex Name</label>
    <input type="text"  name="complex_name" placeholder="complex name">
  
    <input type="submit" value="Add">
  </form>

</div>

 
</body>
</html>