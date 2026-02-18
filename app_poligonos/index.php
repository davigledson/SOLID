<?php 

require __DIR__ . "/vendor/autoload.php";
echo 'Funcionando';

use src\Retangulo;
use src\Quadrado;



$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3>Aréa do retangulo</h3>' . $retangulo->getArea();





$quadrado = new Quadrado();
$quadrado->setAltura(5);
$quadrado->setLargura(10);

echo '<h3>Aréa do quadrado</h3>' . $quadrado->getArea();
