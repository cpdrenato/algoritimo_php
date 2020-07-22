<?php
$produtos = [
   ['id' => 1, 'nome' => 'Produto 01', 'valor_unitario' => 129.99],
   ['id' => 2, 'nome' => 'Produto 02', 'valor_unitario' => 122.90],
   ['id' => 3, 'nome' => 'Produto 03', 'valor_unitario' => 242.20]
];
$produtosMapeados = array_map(function($produto){
  if($produto['valor_unitario'] > 150)
    $produto['valor_unitario'] -= $produto['valor_unitario'] * 0.1;
  
  return $produto;
}, $produtos);
var_dump($produtosMapeados);