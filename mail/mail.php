<?php include_once 'connection/db.php';?>
<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'contact@digitalgreen.org';          // SMTP username
$mail->Password = '4MJ&rnJy';
$mail->SMTPSecure = 'tsl';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                             // TCP port to connect to
$firstname = $_POST["name"];
$email = $_POST["email_val"];
$receiver_mail='contact@digitalgreen.org';
$feedback = $_POST["feedback"];


$msg = "<p>Feedback. Please find the details below.</p><br>";
$msg .= "<table><tr><th>Name</th><th>:</th><td>$firstname</td></tr>";
$msg .= "<tr><th>Email</th><th>:</th><td>$email</td></tr>";
$msg .= "<tr><th>Feedback</th><th>:</th><td>$feedback</td></tr>";
$subject = 'DigitalGreen - Feedback';
$message = $msg;
$headers = "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n" . "From: " . $receiver_mail . "\r\n" . "Reply-To: " . $receiver_mail . "\r\n" . "X-Mailer: PHP/" . phpversion();
		 $mail->setFrom('contact@digitalgreen.org', 'DigitalGreen');
		 $mail->addReplyTo($email, $firstname);
		 $mail->addAddress($receiver_mail);   // Add a recipient
		 $mail->isHTML(true);
		 $mail->Subject = 'Feedback from:'. $email ;
		 $mail->Body    = $message;
		 if($mail->send()) 
			 {
	echo "Hey there! Thank you for writing to us, we will get back to you shortly.";
}
else 
{
	echo "Please try again later";
}
?>
<script type="text/javascript">
	setTimeout(function() {
		window.location.href = "<?php echo $_SERVER['HTTP_REFERER']; ?>";
	}, 2000);
</script>
