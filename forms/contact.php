<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/PHPMailerAutoload.php'; // Path to the PHPMailer Autoload

$contact = new PHPMailer(true);

try {
    //Server settings
    $contact->isSMTP();
    $contact->Host = 'smtp.gmail.com';
    $contact->SMTPAuth = true;
    $contact->Username = 'sameerdilshad1203@gmail.com'; // Your Gmail address
    $contact->Password = 'dqdz bmve gnjb thcj'; // Your Gmail app password
    $contact->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $contact->Port = 587;

    //Recipients
    $contact->setFrom('sameerdilshad1203@gmail.com', $_POST['name']);
    $contact->addAddress('sameerdilshad1203@gmail.com'); // Your Gmail address
    $contact->Subject = $_POST['subject'];
    $contact->Body = "From: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\n\nMessage:\n" . $_POST['message'];

    // Send the email
    $contact->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$contact->ErrorInfo}";
}
?>
