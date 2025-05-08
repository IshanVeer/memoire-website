<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
    $location = filter_var($_POST['location'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $agree = isset($_POST['agree']) ? true : false;

    // Check if required fields are not empty
    if (!empty($name) && !empty($email) && !empty($number) && !empty($location) && !empty($message) && $agree) {
        // Email details
        $to = "work.memoire408@gmail.com"; // Replace with your email
        $subject = "New Contact Form Submission";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        // Email body
        $body = "
        <html>
        <head>
        <title>New Contact Form Submission</title>
        </head>
        <body>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone Number:</strong> $number</p>
        <p><strong>Location:</strong> $location</p>
        <p><strong>Message:</strong> $message</p>
        </body>
        </html>
        ";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            // Redirect to thankyou.php
            header("Location: thankyou.php");
            exit(); // Make sure to exit after redirection
        } else {
            echo "Sorry, something went wrong. Please try again later.";
        }
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "Invalid request method.";
}
?>