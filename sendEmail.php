<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'ass4shift@gmail.com';
    $subject = 'New Contact Form Submission';
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "You have received a new message from $name.\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Message: $message";

    if(mail($to, $subject, $body, $headers)){
        echo "Mail Sent!";
    }else{
        echo "Error!";
    }
}
?>
