<?php
	require_once('phpscripts/init.php');
	//confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin pannel</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<h1>Welcome Admin</h1>
	<div id="loginBox">
		<!--states good morning, afternoon, evening to user when loggedIn, and welcomes them to their account with salutation and taking their username from db_login when user logs in-->
		<h2>Good <?php echo $_SESSION['salutation']; echo $_SESSION['user_name']; ?> welcome to your account!</h2><!--Displays user name and time of day message-->
		<br>
		<h3><?php echo $_SESSION['user_name']; ?> What would you like to do today?</h3>
		<br>
		<?php echo $_SESSION['last_login'];?><!--Displays last login time using session-->
		<br><br>
		<a href="admin_createuser.php" class="links">Create User</a>
		<br><br>
		<a href="admin_edituser.php" class="links">Edit User</a>
		<br><br>
		<a href="admin_deleteuser.php" class="links">Delete User</a>
		<br>
		<br>
		<a href="phpscripts/caller.php?caller_id=logout" id="logOut">Log Out</a>
	</div>
</body>
</html>
