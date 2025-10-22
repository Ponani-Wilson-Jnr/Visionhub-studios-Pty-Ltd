<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Recipient email
    $to = "ponanijunior@gmail.com";
    $subject = "New Enquiry from VisionHub Studios Website";
    
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you! Your message has been sent.</p>";
    } else {
        echo "<p>Oops! Something went wrong, please try again.</p>";
    }
} else {
    echo "<p>Invalid request</p>";
}
?>
