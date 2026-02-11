<?php

namespace App;

use App\CarrinhoComprar;
class Pedido {
    private $status;
    private $carrinhoComprar;
    private $valorPedido;

    public function __construct(){
        $this->status = 'aberto';
        $this->carrinhoComprar = new CarrinhoComprar();
        $this->valorPedido = 0;
    }

    public function getCarrinhoComprar(){
        return $this->carrinhoComprar;
    }

    public function getStatus(){
        return $this->status;
    }
    
    public function setStatus(string $status){
         $this->status = $status;
    }

    public function confirmar(){
        if($this->carrinhoComprar->validarCarrinho()){
            $this->setStatus('confirmado');
            return true;
        } else {

        }
        return false;
    }
}