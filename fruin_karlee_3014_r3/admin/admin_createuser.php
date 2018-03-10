<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once("phpscripts/init.php");
	//confirm_logged_in();

	if(isset($_POST['submit'])){
	$fname = trim($_POST['fname']);
	$username = trim($_POST['username']);
	//generate password
	$email = trim($_POST['email']); //password replaced to generate temp password
	$userlvl = $_POST['userlvl'];
	if(empty($userlvl)){
		$message = "Please select a user level.";
	}else{
		$result = createUser($fname, $username, $email, $userlvl);
		$message = $result;
	}
}

?>
<!doctype html>
</html>
<html>
<head>
<meta charset="UTF-8">
<title>Create User</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<h1>Welcome to your create user page</h1>
	<h3><?php echo $_SESSION['user_name']; ?> create a new user by filling out the form below.</h3><br>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_createuser.php" method="post">
		<label>First Name:</label>
		<input type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;} ?>"><br><br>
		<label>Username:</label>
		<input type="text" name="username" value="<?php if(!empty($username)){echo $username;} ?>"><br><br>
		<label>Email:</label>
		<input type="text" name="email" value="<?php if(!empty($email)){echo $email;} ?>"><br><br>

		<label>User Level:</label> <!--user selects a level-->
		<select name="userlvl">
			<option value="">Please select a user level</option>
			<option value="2">Web Admin</option>
			<option value="1">Web Master</option>
		</select><br><br>
		<input type="submit" name="submit" value="Create User">
		<br><br>
		<a href="admin_index.php" class="links">Back to homepage</a>
	</form>
</body>
</html>
