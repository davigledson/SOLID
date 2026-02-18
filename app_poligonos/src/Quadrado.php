<?php 


namespace src;

class Quadrado extends Retangulo {
    //polimofismo
    public function setAltura(float $altura){
    $this->largura = $altura;
    $this->altura = $altura;
    }
    public function setLargura(float $largura){

    $this->largura = $largura;
    $this->altura = $largura;
    }



}

?>