<?php 

require __DIR__ . "/vendor/autoload.php";


use src\Mensageiro;
use src\Sms;
use src\Email;
use src\Whatsapp;
// ---canal e-mail
$msg = new Mensageiro(new Email());
$msg->enviarToken();


//--- canal sms
echo '<br>';

$msg = new Mensageiro(new Sms());
$msg->enviarToken();


//--- canal Whatsapp
echo '<br>';
$msg = new Mensageiro(new Whatsapp());
$msg->enviarToken();





?>