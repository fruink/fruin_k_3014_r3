<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once("phpscripts/init.php");
	$ip = $_SERVER["REMOTE_ADDR"];
	//echo $ip;

	if(isset($_POST['submit'])){
		//echo "thanks for click";
		$username= trim($_POST['username']);
		$password= trim($_POST['password']);
		//encrypt password for user
		//$encryptPassword = md5($password);
		// insert encrypt pass into db_movies
		//mysqli_query("INSERT INTO user (username, password) VALUES ('$username','$encryptPassword')");
		//echo "$encryptPassword"; //echo to see if encrypted password works

		//$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; //generate password randomly
		//$password = substr(str_shuffle($chars), 0, 10); //shuffle password up to 10 characters
		//mysqli_query("insert into user values('','$username', '$email', '$password')"); //insert into user tbl
		//echo = "Your password is : "{$password};

		if($username != "" && $password != ""){
			$result= logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields.";
		}
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<h1 class="login">Admin Login</h1>
		<h3 id="sign">Please sign into your admin account.</h3>
		<?php if(!empty($message)) {echo $message;} ?>
		<div id="row" class="form">
		<form class="login" action="admin_login.php" method="post">
				<label>username:</label>
				<input type = "text" name="username" placeholder="username">
				<label>password:</label>
				<input type = "password" name="password" placeholder="password">
				<br>
				<br>
				<a href="admin_forgotpass.php">Forgot Password?</a>

		 <input class="btn" type="submit" name="submit" value="submit">

		</form>
	</div>
</body>
</html>
