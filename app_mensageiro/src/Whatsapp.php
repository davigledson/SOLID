<?php

namespace src;


use src\Email;
class Whatsapp implements IMensagemToken {
    public function enviar(){
        echo 'zap: seu token é 555-333';
    }
}

?>