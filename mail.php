<?php

require_once('PHPMailer/src/Exception.php');
require_once('PHPMailer/src/PHPMailer.php');
require_once('PHPMailer/src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptcha_response = $_POST['recaptcha_response'];

    if (empty($recaptcha_response)) {
        echo "<center><h3>reCAPTCHA verification failed: No response received.</h3></center>";
        exit();
    }

    // Validate reCAPTCHA
    $recaptcha_secret = "6LeFZT0rAAAAAIW6U6uiXIZdTxwrM9hRceUwVdex";
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";

    // Use cURL to verify the reCAPTCHA response
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $recaptcha_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response,
        'remoteip' => $user_ip
    ]));

    $recaptcha_verify_response = curl_exec($ch);
    curl_close($ch);

    $recaptcha_result = json_decode($recaptcha_verify_response, true);

    // Check if reCAPTCHA verification was successful
    if (!$recaptcha_result['success']) {
        echo "<center><h3>reCAPTCHA verification failed: " . ($recaptcha_result['error-codes'][0] ?? 'Unknown error') . "</h3></center>";
        exit();
    }

    // Sanitize inputs
    $name = test_input($_POST['name']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $message = test_input($_POST['message']);

    // Prepare the email content
   $message = "<table width='60%' style='border:1px solid black;'>
        <tr><th style='background-color:#0051A4;color:#FFFFFF;'>Description</th><th style='background-color:#0051A4;color:#FFFFFF;'>Value</th></tr>
        <tr style='background-color:#AAD4FF;'><td>Name</td><td>$name</td></tr>
        <tr style='background-color:#AAD4FF;'><td>Phone Number</td><td>$phone</td></tr>
        <tr style='background-color:#AAD4FF;'><td>Email</td><td>$email</td></tr>
        <tr style='background-color:#AAD4FF;'><td>Message</td><td>$message</td></tr>
    </table>";
// Send the email via SMTP
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
          $mail->Username   = 'smtpenquiryvalidation@gmail.com';
    $mail->Password   = 'kngirkffmmiqobbh';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('no-reply@jpsbangalore.com', 'jpsbangalore');
        
        $mail->addAddress('contactjps.bangalore@gmail.com');;

        $mail->isHTML(true);
        $mail->Subject = 'Enquiry From jpsbangalore.com';
        $mail->Body = $message;

        $mail->send();
        echo "<center><h3>Thank you! Your mail has been sent. We will contact you soon.</h3></center>";

// Redirect after 3 seconds
echo "<script>
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 3000); // 3000 milliseconds = 3 seconds
      </script>";

    } catch (Exception $e) {
        echo "<center><h3>Mailer Error: " . $mail->ErrorInfo . "</h3></center>";
    }
}

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}