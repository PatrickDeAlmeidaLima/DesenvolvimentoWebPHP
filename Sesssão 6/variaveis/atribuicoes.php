<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--; //pós fixado numero = numero -1
--$numero; //pre fixado numero = numero -1
echo '<br>' . $numero;
$numero++; //numero = numero +1
++$numero; //numero = numero +1
echo '<br>' . $numero;
$numero = 20;
echo '<br>' . $numero;
$numero -= 5; //
echo '<br>' . $numero;
$numero += 5; //
echo '<br>' . $numero;
$numero *= 10; //
echo '<br>' . $numero;
$numero /= 2; //
echo '<br>' . $numero;
$numero %= 6; //
echo '<br>' . $numero;
$numero **= 4; //
echo '<br>' . $numero;
$numero .= 4; // apenas concatenação!
echo '<br>' . $numero;

$texto = "Texto apenas";
echo '<br>' . $texto;
echo '<br>' . $texto . " qualquer";
echo '<br>' . $texto . " mesmo";

// $variavenInexistente = "valor existente";
echo '<br>' . $variavenInexistente;
// echo '<br>' ; 
var_dump($variavenInexistente);

$valor = $variavenInexistente ?? "valor default";
echo '<br>' . $valor;
