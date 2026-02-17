<?php 
namespace src\extrator;

use src\leitor;
class Arquivo {

private $dados = array();

public function setDados(string $nome, string $cpf, string $email): void {
    $this->dados[] = ([
    'nome'=>iconv('iso-8859-1','utf-8',$nome),
    'cpf'=>$cpf,
    'email'=>$email
    ]);
}


public function getDados(){
    return $this->dados;
}


}

 


?>