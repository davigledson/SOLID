<?php

namespace App;

class CarrinhoComprar {


    //atributos
    private $itens;
    private $status;

    private $valorTotal;


    //metodos

public function __construct() {
    $this->itens = [];
     $this->status = 'aberto';
      $this->valorTotal = 0;

}
 public static function teste(){

 return "OK";
 }

 public  function exibirItens(){

 return $this->itens;
 }

 public function adicionarItem(string $item, float $valor){
    array_push($this->itens,[
    "item"=> $item,
    "valor"=> $valor

    ]);
    $this->valorTotal += $valor;
    return true;
    
 }

 public function exibirValorTotal(){
    return $this->valorTotal;
 }

 public function exibirStatus(){
    return $this->status;
 }

 public function confirmarPedido(){

 if ($this->validarCarrinho()){
    $this->status = 'Confirmado';
    $this->enviarEmailConfirmacao();

    return true;
 }
    return false;
 }

  public function enviarEmailConfirmacao(){
    $this->status = '<br/> ... enviar email';
 }

 
  public function validarCarrinho(){
    return count($this->itens) > 0;
 }
}
