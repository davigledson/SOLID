<?php 

use PHPUnit\Framework\TestCase;
use App\Item;
use PHPUnit\Framework\Attributes\DataProvider;

class ItemTest extends TestCase {


 
public function testEstadoInicialItem(){
    $item = new Item();
    //$item->getDescricao() == '';
    //$item->getValor() == 0;

    //assertçoes do PHPUnit
    $this->assertEquals( '',$item->getDescricao());
    $this->assertEquals( 0,$item->getValor());

}


public function testGetSetDescricao(){
    $descricao = "cadeira";
    $item = new Item();
    $item->setDescricao($descricao);
    $this->assertEquals($descricao,$item->getDescricao());
}


public function testItemValido(){
        //seria submeter um item invalido para o teste e retonar ok

    $item = new Item();
    $item->setValor(55);
    $item->setDescricao('Cadeira de plastico');
    $this->assertEquals(true,$item->itemValido());

    //seria submeter um item invalido para o teste e retonar false (descricao)

     $item->setValor(55);
    $item->setDescricao('');
    $this->assertEquals(false,$item->itemValido());
    //seria submeter um item invalido para o teste e retonar false (valor)

     $item->setValor(0);
    $item->setDescricao('cadeira de plastico');
    $this->assertEquals(false,$item->itemValido());

    //
    
     $item->setValor(0);
    $item->setDescricao('cadeira');
    $this->assertEquals(false,$item->itemValido());
    



    }

   #[DataProvider('dataValores')]
    public function testGetSetValor($valor){
  
    $item = new Item();
    $item->setValor($valor);
    $this->assertEquals($valor,$item->getValor());
}


    public static function dataValores(){
    return [
        [100],
        [-2],
        [0]
    ];
}

    
}



