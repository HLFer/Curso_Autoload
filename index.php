<?php

include_once 'vendas/Usuario.php';
include_once 'vendas/Compra.php';
include_once 'vendas/Produto.php';

$usuario = new Usuario();
$usuario->cadastrar('Henrique', 27);

$produto_1 = new Produto();
$produto_2 = new Produto();

$produto_1->cadastrar(1, 'Produto-1');
$produto_2->cadastrar(2, 'Produto-2');

$compra = new Compra();

$compra->cadastrar(
    [
        'Produto-1' => $produto_1,
        'Produto-2' => $produto_2,
    ],
    $usuario
);

echo $compra->imprimir();
