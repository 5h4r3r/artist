<?php

namespace Src;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Mail
{
    public static function SendMail($name, $tel)
    {
        $title = "Оповещение";
        $body = "
        Клиент оставил свои данные!<br>
        <b>Имя:</b> $name<br>
        <b>Номер телефона:</b>$tel<br>
        ";

        // Настройки PHPMailer
        $mail = new PHPMailer();
        try {
            $mail->isSMTP();
            $mail->CharSet = "UTF-8";
            $mail->SMTPAuth   = true;
            //$mail->SMTPDebug = 2;
            $mail->Debugoutput = function ($str, $level) {
                $GLOBALS['status'][] = $str;
            };

            $mail->Host       = 'smtp.gmail.com'; // SMTP сервера почты
            $mail->Username   = ''; // Логин на почте
            $mail->Password   = ''; // Пароль на почте
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            $mail->setFrom('', 'Заявка на сайте!'); // Адрес почты и имя отправителя

            // Получатель письма
            $mail->addAddress('');

            // Отправка сообщения
            $mail->isHTML(true);
            $mail->Subject = $title;
            $mail->Body = $body;

            // Проверяем отравленность сообщения
            if ($mail->send()) {
                $result = "success";
                $status = "Сообщение отправлено!";
            } else {
                $result = "error";
            }
        } catch (Exception $e) {
            $result = "error";
            $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
        }

        // Отображение результата
        return ["result" => $result, "status" => $status];
    }
}
