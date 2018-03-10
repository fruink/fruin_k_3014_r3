<?php
	//mail form for user when first login




	//mail for new user
	function sendmessage($email, $username, $password){
		$to = '{$email}'; //sends email from webmaster informing them of their login
		$subject = 'subject line';
		$message = 'This is your username and password. Please be sure to not keep it long for security reasons. username:{$username}, password:{$password} url:admin_login.php';
		$header = 'From: yourwebmaster@example.com' . "\r\n" .
			'Reply-To: yourwebmaster@example.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $header);
	}
?>
