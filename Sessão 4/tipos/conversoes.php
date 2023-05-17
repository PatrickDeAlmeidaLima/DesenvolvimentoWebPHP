<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

// int para float
echo '<p>Int para float</p>';

echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float)3);
echo '<br>';

// float para int
var_dump((int)2.8);
echo '<br>';
var_dump(intval(2.8, 10));
echo '<br>';
var_dump(intval(2.999999));
echo '<br>';
var_dump(intval(round(2.8)));
echo '<br>';
var_dump((int) (round(2.8)));
echo '<br>';

// Operações com string
echo '<p>Strings</p>';
echo '<br>';
var_dump(3 + '3');
echo '<br>';
var_dump('3' + 3);
echo '<br>';
var_dump('3' + '3');
echo '<br>';
var_dump('3' . '3');
echo '<br>';
echo is_string('3' . '3');
echo '<br>';
echo is_string(3 + '3');
// var_dump(1 + 'cinco');
echo '<br>';
var_dump(1 + "3 cinco");
echo '<br>';
var_dump(1 + "3+2");
echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");
echo '<br>';
var_dump((float) "10.5");
echo '<br>';
