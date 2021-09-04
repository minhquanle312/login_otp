<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Authentication</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>

	<nav class="header">
		<a href="index.php">LOGIN AUTHENTICATION</a>
		<ul class="header__control">
			<?php
			if (isset($_SESSION["useruid"])) {
				echo "<li><a href='profile.php'>Profile page</a></li>";
				echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
			} else {
				echo "<li><a href='signup.php'>Sign up</a></li>";
				echo "<li><a href='login.php'>Login</a></li>";
			}
			?>
		</ul>
	</nav>

	<div class="wrapper">