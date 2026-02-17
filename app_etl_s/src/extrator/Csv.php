<?php 


namespace src\extrator;

class Csv extends Arquivo {

public function lerArquivo(string $caminho) {

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
fclose($handle);
  return $this->getDados();


}
}




?>