<?php
define("ASS", true);
require($_SERVER['DOCUMENT_ROOT'].'/engine/core.php');
require(ROOT_DIR.'/classes/auth.class.php');
require(ROOT_DIR.'/classes/mail.class.php');
$auth = new Auth;
$mailer = new Mail;

if(isset($_GET['code']) && !empty($_GET['code'])) {
	$googleauth = $auth->GoogleAuth($_GET['code']);
	if($googleauth != false) {
		$email = $googleauth['email'];
		if($auth->UserExist($email)) {
			$auth->UpdateSession($email);
		} else {
			$first_name = $googleauth['given_name'];
			$lastname = $googleauth['family_name'];
			$google = 1;
			$password = generate_string(64);
			$auth->Register($email, $first_name, $lastname, $password, null, null, null, null, null, null, $google);
			$mailer->sendMail($config['smtp']['smtp_login'], $email, 'ASOS Registration', '<p>You have successfully registered, your password is: '.$password.'<p>', $config['smtp']['smtp_login'], $config['smtp']['smtp_password'], $config['smtp']['smtp_host'], $config['smtp']['smtp_port']);
			header("Location: /");
		}
	} else {
		header("Location: /");
	}
} else {
	header("Location: /");
}