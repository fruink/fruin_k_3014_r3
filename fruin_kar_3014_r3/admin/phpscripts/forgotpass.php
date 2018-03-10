<?php

	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	//require_once('phpscripts/init.php');
	//confirm_logged_in();


		if(isset($_POST['submit'])){
			//echo "thanks for the click";
			$new_password= trim($_POST['new_password']);
			$confirm_password= trim($_POST['confirm_password']);
			if($new_password != "" && $confirm_password != ""){
				$result= submit($new_password, $new_password, $ip);
				$message = $result;
			}else{
				$message = "Please fill in the required fields to set up a new password.";
			}
		}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin pannel</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<h1>Welcome to your password reset page</h1>
		<form name="forgot" id="forgot" method="post" onSubmit="return validate_password_reset();">
			<?php if(!empty($success_message)){ ?>
			<div class="success_message"><?php echo $success_message; ?></div>
		<?php } ?>

			<div id="validation_message">
				<?php if(!empty($error_message)){ ?>
				<?php echo $error_message; ?>
			  <?php } ?>
			</div>

			<div class="field">
				<label for="password">New Password</label>
				<input type="password" name="new_password" id="user_member" class="input-field">
			</div>

				<div class="field">
					<label for="email">Confirm Password</label>
					<input type="password" name="confirm_password" id="confirm_password" class="input-field">
				</div>

				<div class="field">
					<input type="submit" name="reset_password" id="reset_password" value="Reset" class="form_submit_btn">
				</div>

				<a href="admin/admin_login.php">Back to login</a>
			</form>
</body>
</html>
