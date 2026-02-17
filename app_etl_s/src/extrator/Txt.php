<?php 


namespace src\extrator;


class Txt extends Arquivo {

public function lerArquivo(string $caminho) {

 if (!file_exists($caminho)) {
        throw new \RuntimeException("Arquivo não encontrado: {$caminho}");
    }
 $handle = fopen($caminho, 'r');
 
 while(!feof($handle)){
    
 $linha = fgets($handle); // o ponteiro interno de leitura do arquivo incrementado
$this->setDados(
    substr($linha,11,30),
    substr($linha,0,11),
    substr($linha,31,50),
    );
   //echo substr($linha,11,30);
   
 
 }
fclose($handle);

  return $this->getDados();

}

}

?>