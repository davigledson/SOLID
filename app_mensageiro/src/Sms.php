<?php

namespace src;


use src\Email;
class Sms implements IMensagemToken {
    public function enviar(){
        echo 'SMS: seu token é 555-333';
    }
}

?>