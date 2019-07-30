<?php
if (isset($_POST['submit'])){
		$to = 'admin@example.com';
		$subject = 'Inquiry';
		$subject = 'Inquiry: ' . $_POST['inquiry'] . "\r\n\r\n";
		//$message .= 'Content-Type: text/plain; charset=utf-8';
		$headers = 'First Name: ' . $_POST['firstname'] . "\r\n\r\n";
		$headers .= 'Last Name: ' . $_POST['lastname'] . "\r\n\r\n";
		$headers .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
		$headers .= 'Country code: ' . $_POST['phonec'] . "\r\n\r\n";
		$headers .= 'Inquiry: ' . $_POST['inquiry'] . "\r\n\r\n";
		$headers .= 'Message: ' . $_POST['message'] . "\r\n\r\n";
		$headers .= 'Country: ' . $_POST['countries'] . "\r\n\r\n";
		$headers .= 'Phone: ' . $_POST['phone'];
		$success = mail($to, $subject. $message, $headers);
		//$success = mail($to, $subject. $message, $headers);
		//header("Location: Thankyoupage.html");
	}
        
        ?>
