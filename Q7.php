<?php
$valorUnitario = readline("Digite o valor unitário (R$): ");
$quantidade = readline("Digite a quantidade adquirida: ");

$valorTotal = $valorUnitario * $quantidade;

echo "\nValor total da compra: R$".$valorTotal;
?>