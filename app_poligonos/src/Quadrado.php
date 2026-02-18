<?php 


namespace src;

class Quadrado   {
     protected $largura;
    protected $altura;
    //
    public function setAltura(float $altura){
    $this->largura = $altura;
    $this->altura = $altura;
    }
    public function setLargura(float $largura){

    $this->largura = $largura;
    $this->altura = $largura;
    }

 public function getLargura(){
        return $this->largura;
    }

    public function getAltura(){
        return $this->altura;
    }


    
public function getArea(): float {
    return $this->largura * $this->altura;
}


}

?>