<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $email = $_POST["_replyto"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "johnbarack10@gmail.com";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "Email sent successfully";
    } else {
        // Failed to send email
        echo "Failed to send email";
    }
} else {
    // If it's not a POST request, show an error message
    echo "Invalid request";
}
?>
