<?php 

namespace src;


class Poligono {

private $forma;

public function setForma(object $forma){
    $this->forma = $forma;
}

public function getForma(){
    return $this->forma;
}


public function getArea(){
        return $this->forma->getArea();
    }



}



?>