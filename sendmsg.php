<?php
use PHPMailer\PHPMailer\PHPMailer;
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', 'Reshmamysql@123', 'perfectcup');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$message = mysqli_real_escape_string($mysqli, $_POST['message']);

$email2 = "sreshma2112@gmail.com";
$subject = "$fname : $email";

if (strlen($fname) > 50) {
    echo 'fname_long';

} elseif (strlen($fname) < 2) {
    echo 'fname_short';

} elseif (strlen($email) > 50) {
    echo 'email_long';

} elseif (strlen($email) < 2) {
    echo 'email_short';

} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';

} elseif (strlen($message) > 500) {
    echo 'message_long';

} elseif (strlen($message) < 3) {
    echo 'message_short';

} else {
    //MAILER

    require 'C:\wamp64(2)\www\perfectcup\phpmailer\src\Exception.php';
    require 'C:\wamp64(2)\www\perfectcup\phpmailer\src\PHPMailer.php';
    require 'C:\wamp64(2)\www\perfectcup\phpmailer\src\SMTP.php';

    $mail = new PHPMailer(true);
    $alert = '';

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'perfectcup2023@gmail.com'; // SMTP username of sender....customer
    $mail->Password = 'uwsplqdktpjsfdso'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    $mail->setFrom($email);
    $mail->addAddress($email2, 'Admin');
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->send();
    echo 'true';
}

// $mail->AddReplyTo($email);
// $mail->From = $email2;
// $mail->FromName = $fname;
// $mail->addAddress('jaferimam786@gmail.com', 'Admin');     // Add a recipient

// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if (!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'true';
// }
// catch(Exception $e){
//     $alert='<div class="alert"><span>".$e->getMessage()."</span</div>';
// }
