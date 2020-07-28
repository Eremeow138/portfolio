<?php
    $to = 'eremeow138@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $userEmail = $_POST['email'];
    $userName = $_POST['name'];

    // $notspam = $_POST['notspam'];
    // if ($notspam == 'Not spam') {
    //     $notspam = 'Не бот';
    // } else {
    //     $notspam = 'Бот';
    //     exit('Exit');
    // };
    $message = '
    <html>
        <head>
            <title> Письмецо </title>
        </head>
        <body>
            <h2 style="">Заявка с формы портфолио</h2>
            <p>Контактное лицо: ' . $userName . '</p>
            <p>E-mail: ' . $userEmail . '</p>
            <p>Сообщение: ' . $_POST['message'] . '</p>
        </body>
    </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Архитектор <eremeow138@yandex.ru>\r\n"; //Наименование и почта отправителя

    mail($to, 'Письмецо', $message, $headers);
    // if (mail($to, $subject, $message, $headers)) {
    //     echo $notspam;
    // } else {
    //     echo 'error';
    // }

?>
