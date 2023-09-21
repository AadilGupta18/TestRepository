<?php
// Set sender's email address and name
$sender_email = "yourname@example.com";
$sender_name = "Your Name";

// Set the recipient email address
$to = "recipient@example.com";

// Set the subject of the email
$subject = "Test Email";

// Set the message body
$message = "This is a test email sent from PHP.";

// Set additional headers (optional)
$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_name <$sender_email>\r\n";
$headers .= "CC: cc@example.com\r\n"; // You can add CC and BCC recipients here
$headers .= "BCC: bcc@example.com\r\n";

// Additional email headers to set content type and charset (optional)
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

// Attempt to send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email delivery failed.";
}
?>
