<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "your_email@example.com";
    $subject = "New Contact Message from $name";
    
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
    echo "Message sent successfully!";
}
?>
