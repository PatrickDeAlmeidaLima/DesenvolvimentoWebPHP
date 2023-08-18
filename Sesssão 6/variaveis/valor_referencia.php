<div class="titulo">Valor vs Referência</div>

<?php

$variavel = 'valor inicial';

echo $variavel;
//atribuição por valor
$variavelValor = $variavel;
echo '<br>' . $variavelValor;
$variavelValor = 'novo valor';
echo '<br>' . $variavelValor . ',' . $variavel;

//atribuição por referência
$variavelReferencia = &$variavel;
echo '<br>' . $variavelReferencia;
$variavelReferencia =  'Mesma referencia';
echo '<br>' . $variavel.','.$variavelReferencia;