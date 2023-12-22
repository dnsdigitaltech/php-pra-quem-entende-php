<?php 
// function send($data){
//     $to = 'dnssites@gmail.com';
//     $subject = $data->subject;
//     $message = $data->body;
//     $headers = "From: {$data->email}"."\r\n".
//     'Reply-to: dnssites@gmail.com'."\r\n".
//     'X-Mailer: PHP/'.phpversion();

//     return mail($to, $subject, $message, $headers);

// }

function send(array $data) {
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain';//ssl
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = '728f5c3e215f7b';
    $email->Password = '1895599acd8c7f';
    $email->isHTML(true);
    $email->setFrom('dnssites@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
    $email->msgHTML($data['mensagem']);
    return $email->send();
}