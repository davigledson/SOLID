<?php 

require __DIR__ . "/vendor/autoload.php";


use src\Leitor;


$leitor = new Leitor();
$leitor->setDiretorio(__DIR__
);
$leitor->setArquivo('dados.csv');
$leitor->lerArquivo();

?>