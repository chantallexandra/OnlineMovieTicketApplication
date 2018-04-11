
		<?php include 'css/include.html'; ?>
		<link rel="stylesheet" type="text/css" href="./css/members.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="home.php">GoldCity Movies</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="admin_home.php">Administrator Home Page <span class="sr-only">(current)</span></a></li>
					<li class="active"><a href="home.php">Movies Home Page <span class="sr-only">(current)</span></a></li>
	      </ul>

				<ul class="nav navbar-nav navbar-right">
				<div class="dropdown">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Members Information
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="members.php">Search + Edit Members</a>
			  </div>
			</div>
			 </ul>

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
<a href="add_movies.php"><button type="button" class="btn btn-success float-right" style ="margin-left:50px;">Add Movie</button></a>
<a href="add_theatre.php"><button type="button" class="btn btn-success float-right">Add Theatre</button></a>
<a href="add_complex.php"><button type="button" class="btn btn-success float-right">Add Complex</button></a>
<a href="add_showings.php"><button type="button" class="btn btn-success float-right">Add Showing</button></a>
<a href="update_complex.php"><button type="button" class="btn btn-success float-right">Update Complex Information</button></a>
<a href="update_theatre.php"><button type="button" class="btn btn-success float-right">Update Theatres Information</button></a>
<br>
<br>