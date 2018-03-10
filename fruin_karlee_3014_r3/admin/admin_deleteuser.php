<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once("phpscripts/init.php");
	//confirm_logged_in();

	$tbl = "tbl_user";
	$user = getAll($tbl); //get all user from users_tbl


?>
<!doctype html>
</html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete User</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<h1>Delete user page</h1>
	<h3><?php echo $_SESSION['user_name']; ?> delete a user by clicking Delete this user?</h3><br>
	<?php while($row = mysqli_fetch_array($user)){
		echo "{$row['user_fname']} <a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete this user?</a><br>";
	}
?>
<br><br>
	<a href="admin_index.php" class="links">Back to homepage</a>
</body>
</html>
