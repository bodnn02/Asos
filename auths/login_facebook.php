<?php
define("ASS", true);
require($_SERVER['DOCUMENT_ROOT'].'/engine/core.php');
require(ROOT_DIR.'/classes/auth.class.php');
require(ROOT_DIR.'/classes/mail.class.php');
$auth = new Auth;
$mailer = new Mail;

if(isset($_GET['code']) && !empty($_GET['code'])) {
	$facebookauth = $auth->FacebookAuth($_GET['code']);
	if($facebookauth != false) {
		$email = $facebookauth['email'];
		if($auth->UserExist($email)) {
			$auth->UpdateSession($email);
		} else {
			$first_name = $facebookauth['first_name'];
			$lastname = $facebookauth['last_name'];
			$facebook = 1;
			$password = generate_string(64);
			$auth->Register($email, $first_name, $lastname, $password, null, null, null, null, null, null, null, $facebook);
			$mailer->sendMail($config['smtp']['smtp_login'], $email, 'ASOS Registration', '<p>You have successfully registered, your password is: '.$password.'<p>', $config['smtp']['smtp_login'], $config['smtp']['smtp_password'], $config['smtp']['smtp_host'], $config['smtp']['smtp_port']);
			header("Location: /");
		}
	} else {
		header("Location: /");
	}
} else {
	header("Location: /");
}