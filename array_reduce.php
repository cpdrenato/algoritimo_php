<?php
$produtos = [
   ['id' => 1, 'nome' => 'Produto 01', 'valor_unitario' => 129.99],
   ['id' => 2, 'nome' => 'Produto 02', 'valor_unitario' => 122.90],
   ['id' => 3, 'nome' => 'Produto 03', 'valor_unitario' => 242.20]
];

$total = array_reduce($produtos, function($price, $produto) {
  $price += $produto['valor_unitario'];
  return $price;
});

echo $total;