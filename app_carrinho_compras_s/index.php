<?php 

require __DIR__ . "/vendor/autoload.php"; 

use App\CarrinhoComprar;
use App\Item;
use App\Pedido;
use App\EmailService;




echo '<h3>carrinhoComprar SRP</h3>';

$pedido = new Pedido();
$item1 = new Item();
$item2 = new Item();


$item1->setDescricao('porta copo');
$item1->setValor(4.55);

$item2->setDescricao('Lampada');
$item2->setValor(8.33);

echo "<h4>Pedido<h4/>";

echo "<pre>";
print_r($pedido);
echo "</pre>";


$pedido->getCarrinhoComprar()->adicionarItem($item1);
$pedido->getCarrinhoComprar()->adicionarItem($item2);

echo "<h4>Pedido com itens<h4/>";

echo "<pre>";
print_r($pedido);
echo "</pre>";


echo "<h4>itens do carrinho<h4/>";

echo "<pre>";
print_r($pedido->getCarrinhoComprar()->getItens());
echo "</pre>";



//---------------------------------
echo "<h4>valor do pedido<h4/>";

echo "<pre>";
    $total =0;
foreach($pedido->getCarrinhoComprar()->getItens() as $key => $item){
    $total += $item->getValor();
}
echo "</pre>";
echo "<h4>valor do pedido<h4/>";
echo $total;

echo "<h4>Carrinho estar valido?<h4/>";
echo $pedido->getCarrinhoComprar()->validarCarrinho();


echo "<h4>pedido stattus<h4/>";
echo $pedido->getStatus();


echo "<h4>pedido confirmado<h4/>";
echo $pedido->confirmar();
echo "<h4>email<h4/>";
if($pedido->getStatus() == 'confirmado'){
echo EmailService::dispararEmail();
};

/**
$carrinho1 = new CarrinhoComprar();

$pedido = new Pedido();
echo '<br/>';
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
*/