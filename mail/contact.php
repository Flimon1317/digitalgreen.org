<?php
$firstname = $_POST["name"];


$email = $_POST["email"];
$feedback = $_POST["feedback"];


$msg = "<p>Feedback. Please find the details below.</p><br>";
$msg .= "<table><tr><th>Name</th><th>:</th><td>$firstname</td></tr>";
$msg .= "<tr><th>Email</th><th>:</th><td>$email</td></tr>";
$msg .= "<tr><th>Interested</th><th>:</th><td>$feedback</td></tr>";


$to = 'nikhil@digitalgreen.org';
$subject = 'DigitalGreen - Feedback';
$message = $msg;
$headers = "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n" . "From: " . $email . "\r\n" . "Reply-To: " . $email . "\r\n" . "X-Mailer: PHP/" . phpversion();

if(mail($to, $subject, $message, $headers))
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
