<?php 


require __DIR__ . "/vendor/autoload.php";




use src\dao\ContratoModel;
use src\dao\LeadModel;
use src\dao\UsuarioModel;

echo 'teste';

$contratoModel = new ContratoModel();
print_r($contratoModel);
echo '<br>';

$contratoModel = new ContratoModel();
print_r($contratoModel);
echo '<br>';

$leadModel = new LeadModel();
print_r($leadModel);
echo '<br>';

?>