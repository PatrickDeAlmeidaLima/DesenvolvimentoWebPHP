<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;

echo $numeroA, '<br>';

var_dump($numeroA);

echo '<br>';

$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;

echo $somaDosNumeros, '<br>';

echo isset($somaDosNumeros);
echo '<br>';

unset($somaDosNumeros);
var_dump($somaDosNumeros);
echo '<br>';

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Sou uma string";
echo '<br>' . $variavel;
