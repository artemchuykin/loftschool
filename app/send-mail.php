<?php
session_start();

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = htmlspecialchars(strip_tags(trim($_POST['message'])), ENT_QUOTES);
$captcha_code = $_POST['captcha'];
$sess_captcha = $_SESSION['randStrn'];

$data = array();

if($sess_captcha != $captcha_code) {
    $data['status'] = 'NO';
    $data['mes'] = 'Код с картинки введен не верно';   
}

if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
   
require_once 'libs/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Username = "artemchuykin48@gmail.com";
$mail->Password = "";
$mail->Port = 465;
$mail->Charset = 'UTF-8';
    
$mail->From = 'artemchuykin48@gmail.com';
$mail->FromName = 'Чуйкин Артем';
$mail->AddAddress($email, $name);

// $mail->WordWrap = $0;   
$mail->Subject = 'Сообщение с сайта портфолио';
$mail->Body = $message;

if($mail->send()) {
// echo "true";
$data['status'] = 'OK';
$data['mes'] = 'Письмо успешно отправлено';
} else {
$data['status'] = 'NO';
$data['mes'] = 'Возникла неизвестная ошибка при отправке письма';
// echo 'Message could not be sent.';
// echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    
    $data['status'] = 'OK';
    $data['mes'] = 'Правильно заполните поля e-mail';
}
}
echo json_encode($data);
exit;
?>