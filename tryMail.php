<?php
require_once 'ClassAutoload.php';

$mailCnt=[
    'name_from' => 'Lucky',
    'email_from' => 'luckylisa.bemeye@strathmore.edu',
    'name_to' => 'Lisa Erasto',
    'email_to' => 'bemeyeluckylisa@gmail.com',
    'subject' => 'Change Email',
    'body' => 'Message is sent'
];


$ObjSendMail->Send_Mail($conf, $mailCnt);
?>