<?php 
    $email = $_POST['email'];
    $message = $_POST['message'];
    $err = '';
    if(trim($email)==''){
        $err = 'Введите ваш Email';
    } elseif(trim($message)==''){
        $err = 'Введите сообщение';
    } elseif (strlen($message)<10){
        $err = 'Сообщение должно быть более 10 символов';
    }
    if($err != ''){
        echo $err;
        exit;
    }

    $subject = "=?utf-8?B".base64_encode("Тестовое сообщение мне")."?=";
    $headers = "From: $email\r\n Reply-to: $email\r\n Content-type: text/html;charset=utf-8\r\n";
    mail('diglo00@mail.ru', $subject, $message, $headers);
    header('Location: about.php');
?>