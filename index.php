
<?php 
  session_start(); 

  //load register.php page as default.
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: register.php');
  }
  //load login.php when user logs out.
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']); //destroy session as user has logged out
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="index-body">
	<header>
	<nav>
		<ul>
					<li><a href = "login.php">Login</a></li>
					<li><a href = "register.php">Register</a></li>
		</ul>
	</nav>
	</header>
<h1>Home</h1>
<!-- Display message from previous page -
	-> show 'Logged in' message when login successful, or 'Registered' message when registration successful -->
<?php if (isset($_SESSION['success'])) : ?>

	<h2>
		<?php 
		echo $_SESSION['success']; 
		unset($_SESSION['success']);  //clear session
		?>
	</h2>

<?php endif ?>
<!-- display message with the username of the user who logged in or registered -->
<?php  if (isset($_SESSION['username'])) : ?>
	<h3>Welcome <?php echo $_SESSION['username']."!"; ?></h3>
	<hr>
	<!-- Log out button -->
	<p> <a class="link-style" href="index.php?logout='1'" style="color: white;">Log out</a> </p>
<?php endif ?>

</body>
</html>

