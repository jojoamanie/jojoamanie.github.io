

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    
    $message = htmlspecialchars(trim($_POST['message']));

    // Your email address where you want to receive messages
    $to = "jojoamanie2@gmail.com"; // Replace with your actual email address

    // Email headers
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    // Email body
    $email_body = "<h2>Contact Form Submission</h2>";
    $email_body .= "<p><strong>Name:</strong> " . $name . "</p>";
    $email_body .= "<p><strong>Email:</strong> " . $email . "</p>";
    
    $email_body .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Redirect if accessed directly without form submission
    header("Location: index.html");
    exit();
}
?>
