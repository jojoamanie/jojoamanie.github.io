

<?php



// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = $_POST['user-name'];
    $email = $_POST['user-email'];
     $message= $_POST['message'];

    // SQL query to insert data

     $to      = 'jojoamanie2@gmail.com';
    $subject = $name;
    $message = $message;
    $headers = $email    . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
   
}

?>