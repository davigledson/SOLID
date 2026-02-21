<?php

namespace src;


use src\Email;
use src\IMensagemToken;
class Mensageiro {
    private $canal;

    public function __construct(IMensagemToken $canal){
        $this->setCanal($canal);

    }

    public function getCanal(){
        return $this->canal;
    }

    public function setCanal(IMensagemToken $canal) {
         $this->canal = $canal;
    }

    public function enviarToken(){
        $this->getCanal()->enviar();
       /**
        *  $classe = '\src\\' . ucfirst($this->getCanal());
       $obj = new $classe;
        print_r($obj);
       $obj->enviar();
        */
      
    }
}

?>