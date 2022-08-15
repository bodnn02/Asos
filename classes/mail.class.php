<?php
if (!defined("ASS")) {
    die("<pre>Нет доступа!</pre>");
}

class Mail
{
	require ROOT_DIR.'/libs/phpmailer/Exception.php';
	require ROOT_DIR.'/libs/phpmailer/PHPMailer.php';
	require ROOT_DIR.'/libs/phpmailer/SMTP.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	public function sendMail($from, $to, $subject, $message, $login, $password, $host, $port, $attachment = null, $attachment_name = null) {
		global $link;
		try {
			$mail = new PHPMailer();
			#$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		    $mail->isSMTP();
		    $mail->Host       = $host;
		    $mail->SMTPAuth   = true;
		    $mail->Username   = $login;
		    $mail->Password   = $password;
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		    $mail->Port       = $port;

		    $mail->setFrom($from, $from);
		    $mail->addAddress($to);

		    $mail->isHTML(true);
		    $mail->CharSet = "utf-8";
		    $mail->Subject = $subject;
		    $mail->Body    = $message;
		    $mail->AltBody = mb_substr(strip_tags($message), 0, 50);

		    if($attachment != null && $attachment_name != null) {
		    	$mail->addAttachment($attachment, $attachment_name);
		    }

		    if($mail->send()) {
		    	return true;
		    } else {
		    	return false;
		    }
		} catch (Exception $e) {
		    return false;
		}
	}
}