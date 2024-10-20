<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gnail.com';
    $mail ->SMTPAuth = true;
    $mail->Username = ''; // Gmail Username (Note: Use Another Gmail for this Server do not use your personal acc.)
    $mail->Password = '';   // Gmail Password or the app password
    $main->SMPTSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom(''); // Gmail username (Note: Use Another Gmail for this Server do not use your personal acc.)

    $mail->addAddress(''); // 2nd Gmail Username for receiving Feedbacks and Suggestions

    $mail->isHTML(true);

    $mail->Subject = $_POST['type'];

    $mail->Body = $_POST['message'];

    $mail->send();

    echo "<script> alert('Sent Successfully') </script>"; // Erase this line of code if the email is receive

    $type = isset($_POST['type']) ? htmlspecialchars($_POST['type']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    if (!empty($type) && !empty($message)) {
 
        $filename = "feedback_history.txt"; 
        $entry = "$type: $message\n";
        file_put_contents($filename, $entry, FILE_APPEND | LOCK_EX);
        echo "Feedback saved successfully!";
    } else {
        echo "Please provide both Type and Message.";
    }
}
?>
