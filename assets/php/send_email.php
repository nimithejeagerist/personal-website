<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // The message
    $name = htmlspecialchars($_POST["name"]);
    $email_address = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $full_message = "Name: " . $name . "\r\n" . 
                    "Email: " . $email_address . "\r\n" . 
                    "Subject: " . $subject . "\r\n" . 
                    "Message: " . $message;
    
    $to = 'nakinroye@gmail.com';
    $headers = 'From: ' . $email_address . "\r\n" .
               'Reply-To: ' . $email_address . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    // Send email
    if (mail($to, $subject, $full_message, $headers)) {
        echo "Your mail has been sent.";
    } else {
        echo "Failed to send mail.";
    }
} else {
    echo "Invalid request method.";
}
?>