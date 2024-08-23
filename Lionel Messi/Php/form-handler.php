<?php
// Hata raporlamayı etkinleştir
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Formdan gelen verileri al
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Gönderen e-posta adresi
$email_from = 'furkanturkertr@gmail.com';

// E-posta konusu
$email_subject = 'New Form Submission';

// E-posta içeriği
$email_body = "User Name: $name.\n"
              "User Email: $visitor_email.\n"
              "Subject: $subject.\n"
              "User Message: $message.\n";

// Alıcı e-posta adresi
$to = 'furkanturkertr@gmail.com';

// E-posta başlıkları
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// E-postayı gönder ve kontrol et
if(mail($to, $email_subject, $email_body, $headers)){
    echo "Mail Sent Successfully";
} else {
    echo "Mail Sending Failed";
}

// Yönlendirme
header("Location: contact.html");
exit();
?>
