<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Composer'ın autoload dosyasını dahil edin
require 'vendor/autoload.php';

if (isset($_POST["name"]))  
{
    $success = false;
    $name = isset($_POST['name']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['name']) : "";
    $senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
    $messageContent = isset($_POST['contact_message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['contact_message']) : "";

    $mail = new PHPMailer(true);
    
    try {
        // SMTP ayarları
        $mail->isSMTP();
        $mail->Host = 'mail.host.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'e-mail@mail.com';
        $mail->Password = 'password';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Alıcı ve gönderici bilgileri
        $mail->setFrom('mail', 'Antizmir Disleksi');
        $mail->addAddress('name@domain.com'); // Alıcı e-posta adresini buraya ekleyin
        $mail->addReplyTo($senderEmail, $name);

        // E-posta içeriği
        $mail->isHTML(true);
        $mail->Subject = 'Contact Us';
        $mail->Body    = "First Name: ". $name . "<br> Email: ". $senderEmail . "<br> Message: " . $messageContent;

        $mail->send();
        echo '<div class="success">Email has been sent successfully.</div>';
    } catch (Exception $e) {
        echo 'Error: Email did not send. Mailer Error: ', $mail->ErrorInfo;
    }
}
else
{
    echo '<div class="failed">Failed: Email not Sent.</div>';
}
?>