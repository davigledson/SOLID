<?php 

require __DIR__ . "/vendor/autoload.php";
echo 'Funcionando';

use src\Retangulo;
use src\Quadrado;
use src\Poligono;




$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);


echo '<pre>';
print_r($poligono) ;
echo '<pre>';

echo '<h3>Aréa do retangulo</h3>' . $poligono->getArea();




$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(10);



echo '<pre>';
print_r($poligono) ;
echo '<pre>';

echo '<h3>Aréa do quadrado</h3>' . $poligono->getArea();
/**
$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3>Aréa do retangulo</h3>' . $retangulo->getArea();
$quadrado = new Quadrado();
$quadrado->setAltura(5);
$quadrado->setLargura(10);

echo '<h3>Aréa do quadrado</h3>' . $quadrado->getArea();

*/



