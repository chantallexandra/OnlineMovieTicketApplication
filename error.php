<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
	<?php include 'css/include.html'; ?>
  <?php include 'css/css.html'; ?>

</head>
<body style="background: rgb(90,90,90) url('http://hdqwalls.com/wallpapers/black-panther-minimalism-4k-qk.jpg')">
<div class="form">
    <h1>Error</h1>
    <p>
    <?php
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>
    <a href="index.php"><button class="btn btn-primary btn-block"/>Back to login</button></a>
</div>
</body>
</html>
