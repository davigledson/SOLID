<?php 

namespace src;
class Retangulo {
    protected $largura;
    protected $altura;

    public function setLargura(float $largura){
    $this->largura = $largura;
    }
    public function setAltura(float $altura){
    $this->altura = $altura;
    }

    public function getLargura(){
        return $this->largura;
    }

    public function getAltura(){
        return $this->altura;
    }

    
    public function getArea(){
        return $this->getAltura() * $this->getLargura();
    }
}


?>