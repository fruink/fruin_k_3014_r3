<?php
	function createUser($fname, $username, $email, $userlvl) {
		include('connect.php');
		$userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$email}', NULL, '{$userlvl}', 'no')";
		//echo $userString;
	$userQuery = mysqli_query($link, $userString);
		if($userQuery) {
			sendmessage($email, $username, $password);
			//Email message, the email needs a username and password.
			//The mail.php file is the code to generate this.
			redirect_to("admin_index.php");
		}else{
			$message = "There was a problem setting up this user. Contact your system administrator for assistance.";
			return $message;
		}
	mysqli_close($link);
}

function editUser($id, $fname, $username, $password, $email){
	include('connect.php');

	$updateString = "UPDATE tbl_user SET user_fname='{$fname}', user_name='{$username}', user_pass='{$password}', user_email='{$email}' WHERE user_id={$id}";
	$updateQuery = mysqli_query($link, $updateString);
	if($updateQuery){
		redirect_to("admin_index.php"); //redirect to index.php after update is made for user
	}else{
		$message = "There was a problem updating. Please contact your system administrator for assistance.";
		return $message;
	}
	mysqli_close($link);
}

function deleteUser($id){ //delete user from db
	include('connect.php');
	$delstring = "DELETE FROM tbl_user WHERE user_id = {$id}"; //delete user from tbl_user
	$delQuery = mysqli_query($link, $delstring); //delete query string of user
	if($delQuery){
		redirect_to("../admin_index.php"); //redirect to index.php after del of user
	}else{
		$message = "Sorry to see you leave."; //display $message
		return $message;
	}
	mysqli_close($link);
}

?>
