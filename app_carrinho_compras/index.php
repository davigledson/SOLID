<?php 

require __DIR__ . "/vendor/autoload.php"; 

use App\CarrinhoComprar;


$carrinho1 = new CarrinhoComprar();
echo 'Valor Total ' . $carrinho1->exibirValorTotal();
echo '<br/>';

$carrinho1->adicionarItem('Bike', 750);
$carrinho1->adicionarItem('gato', 150);
$carrinho1->adicionarItem('cachorro', 70);

print_r(value: $carrinho1->exibirItens());
echo '<br/>';

echo 'Valor Total ' . $carrinho1->exibirValorTotal();
echo '<br/>';

echo 'Status ' . $carrinho1->exibirStatus();
echo '<br/>';
$carrinho1->confirmarPedido();
echo 'Status ' . $carrinho1->exibirStatus();
echo '<br/>';