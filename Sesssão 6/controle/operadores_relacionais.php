<div class="titulo"> Operadores Relacionais</div>

<?php
var_dump(1 == 1); //true
echo '<br>';
var_dump(1 > 1); //false
echo '<br>';
var_dump(1 >= 1); //true
echo '<br>';
var_dump(4 < 23); //true
echo '<br>';
var_dump(1 <= 7); //true
echo '<br>';
var_dump(1 <> 1); //false
echo '<br>';
var_dump(1 != 1); //false
echo '<br>';


echo '---------';
echo '<br>';
var_dump(1 == '1') . '<br>'; //true
echo '<br>';
var_dump(111 == '111') . '<br>'; //true
echo '<br>';
var_dump(111 === '111') . '<br>'; //false
echo '<br>';
var_dump(111 != '111') . '<br>'; //false
echo '<br>';
var_dump(111 !== '111') . '<br>'; //true

echo "<p>Relacionais no if/else</p><hr>";

$idade = 25;
if ($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos<br>";
}

echo '<p>Spaceship</p><hr>';
var_dump(5<=>3);
echo '<br>';
var_dump(5<=>5);
echo '<br>';
var_dump(1<=>5);
echo '<br>';

echo '<p>Valores pode ser verdadeiro ou falso</p>';
var_dump(!!5);
echo '<br>';
var_dump(!!0);
echo '<br>';
var_dump(!!"");
echo '<br>';
var_dump(!!" ");
echo '<br>';

?>
<style>
    p {
        margin-bottom: 0;
    }

    hr {
        margin-top: 0px;
    }
</style>