<?php 

require __DIR__ . "/vendor/autoload.php";


use src\Leitor;


$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__
);
$leitorTXT->setArquivo('dados.txt');

$arr_txt = $leitorTXT->lerArquivo();
;

echo '<pre>';
 print_r($leitorTXT->lerArquivo());
 echo '</pre>';


 
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__
);
$leitorCSV->setArquivo('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();

;

echo '<pre>';
 print_r($leitorCSV->lerArquivo());
 echo '</pre>';

 print_r(array_merge($arr_csv,$arr_csv));


?>