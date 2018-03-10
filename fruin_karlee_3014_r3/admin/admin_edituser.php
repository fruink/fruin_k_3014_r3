<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once("phpscripts/init.php");
	//confirm_logged_in();

	$id = $_SESSION['user_id'];
	$tbl = "tbl_user";
	$col = "user_id";
	$popForm = getSingle($tbl, $col, $id);
	$info = mysqli_fetch_array($popForm);
	//echo $info;

	if(isset($_POST['submit'])){
	$fname = trim($_POST['fname']);
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email = trim($_POST['email']);
	$result = editUser($id, $fname, $username, $password, $email);
	$message = $result;

}

?>
<!doctype html>
</html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit User</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<h1>Welcome to your edit user page</h1>
	<h3><?php echo $_SESSION['user_name']; ?> edit a user by making changes to the form below.</h3><br>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_edituser.php" method="post">
		<label>First Name:</label>
		<input type="text" name="fname" value="<?php echo $info['user_fname']; ?>"><br><br>
		<label>Username:</label>
		<input type="text" name="username" value="<?php echo $info['user_name']; ?>"><br><br>
		<label>Password:</label>
		<input type="text" name="password" value="<?php echo $info['user_pass']; ?>"><br><br>
		<label>Email:</label>
		<input type="text" name="email" value="<?php echo $info['user_email']; ?>">
		<br>
		<br>
		<input type="submit" name="submit" value="Edit User">
		<br><br>
		<a href="admin_index.php" class="links">Back to homepage</a>
	</form>
</body>
</html>
