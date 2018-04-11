<?php
/* Log out process, unsets and destroys session variables */
session_start();
$_SESSION['logged_in'] = false;
#session_unset();
#session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="form">
          <h1>Thanks for stopping by</h1>

          <p><?= 'You have been logged out!'; ?></p>
					<?php
					$_SESSION['logged_in'] = false;
					 ?>

          <a href="index.php"><button class="button"/>Login</button></a>
					<a href="home.php"><button class="button" name="home"/>Home Page</button></a>


    </div>
</body>
</html>
