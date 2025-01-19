<?php
// Sertakan file autoload PHPMailer jika Anda menggunakan Composer
require 'vendor/autoload.php';  // Jika Anda menggunakan Composer

// Jika Anda mengunduh PHPMailer secara manual, ganti dengan path ke file PHPMailer
// require 'path-to-phpmailer/PHPMailerAutoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari formulir
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Membuat objek PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Menyiapkan pengaturan SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Host SMTP Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Ganti dengan email Gmail Anda
        $mail->Password = 'your-email-password'; // Ganti dengan password email Gmail Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Pengaturan pengirim dan penerima
        $mail->setFrom($email, $name);  // Pengirim
        $mail->addAddress('info@exagmail.com'); // Penerima (ganti dengan email tujuan)

        // Menyiapkan email
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Message: ' . $subject;
        $mail->Body    = "Name: " . $name . "<br>Email: " . $email . "<br>Message: <br>" . nl2br($message);

        // Mengirim email
        $mail->send();
        echo "Your message has been sent. Thank you!";
    } catch (Exception $e) {
        echo "There was a problem sending your message. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Jika menggunakan Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari formulir
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Membuat objek PHPMailer
    $mail = new PHPMailer(true);
    
    try {
        // Menyiapkan pengaturan SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Menggunakan Gmail SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Ganti dengan email Anda
        $mail->Password = 'your-email-password'; // Ganti dengan password email Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Pengaturan pengirim dan penerima
        $mail->setFrom($email, $name);
        $mail->addAddress('info@exagmail.com'); // Ganti dengan email tujuan

        // Konten email
        $mail->isHTML(true);
        $mail->Subject = "New Contact Message: " . $subject;
        $mail->Body    = "Name: " . $name . "<br>Email: " . $email . "<br>Message: <br>" . nl2br($message);

        // Mengirim email
        $mail->send();
        echo "Your message has been sent. Thank you!";
    } catch (Exception $e) {
        echo "There was a problem sending your message. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
