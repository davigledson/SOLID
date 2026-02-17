<?php 

namespace src;

use src\extrator\Txt;
use src\extrator\Csv;

class Leitor {
    private $diretorio;
    private $arquivo;


    public function getDiretorio() {
        return $this->diretorio;
    } 

    public function getArquivo() {
        return $this->arquivo;
    } 

    public function setDiretorio(string $diretorio) {
        return $this->diretorio = $diretorio;
    } 

    public function setArquivo(string $arquivo) {
        return $this->arquivo = $arquivo;
    } 

    public function lerArquivo(){
        $caminho = $this->getDiretorio().DIRECTORY_SEPARATOR .$this->getArquivo();

       
        $extensao = explode('.',$this->getArquivo());
        $classe = '\src\extrator\\' . ucfirst($extensao[1]);
        //echo $classe;

        return call_user_func_array(
            [
            new $classe,
            'lerArquivo'
            ],

            [
            $caminho
            ]
        );
        
        
        /**
         * 

$arquivo = new Arquivo();
        if($extensao[1] =='csv'){
        $arquivo->lerArquivoCSV($caminho);

        } else if($extensao[1] == 'txt'){
        $arquivo->lerArquivoTXT($caminho);
        }
        
        


        return  $arquivo->getDados();

         */
        
    }

}



?>