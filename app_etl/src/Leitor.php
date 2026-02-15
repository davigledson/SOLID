<?php 

namespace src;

use src\Arquivo;
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

        $arquivo = new Arquivo();
        $arquivo->lerArquivoCSV($caminho);
        return  $arquivo->getDados();
    }

}



?>