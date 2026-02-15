<?php 
namespace src;

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

public function lerArquivoCSV(string $caminho) {

 if (!file_exists($caminho)) {
        throw new \RuntimeException("Arquivo não encontrado: {$caminho}");
    }
 $handle = fopen($caminho, 'r');
 
 while(($linha = fgetcsv($handle,100,';')) !== false){
    $this->setDados($linha[0],$linha[1],$linha[2]);
    //print_r($linha[0]);
    //print_r($linha[1]);
    //print_r($linha[2]);
 }

 echo '<pre>';
 print_r($this->dados);
 echo '</pre>';


}



}



?>