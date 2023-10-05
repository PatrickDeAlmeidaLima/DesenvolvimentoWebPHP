<div class="titulo"> Operadores Relacionais</div>

<?php
var_dump(1 == 1) ; //true
echo '<br>';
var_dump(1 > 1) ; //false
echo '<br>';
var_dump(1 >= 1) ; //true
echo '<br>';
var_dump(4 < 23) ; //true
echo '<br>';
var_dump(1 <= 7) ; //true
echo '<br>';
var_dump(1 <> 1) ; //false
echo '<br>';
var_dump(1 != 1) ; //false
echo '<br>';


echo '---------' ;
echo '<br>';
var_dump(1 == '1').'<br>'; //true
echo '<br>';
var_dump(111 == '111').'<br>'; //true
echo '<br>';
var_dump(111 === '111').'<br>'; //false
echo '<br>';
var_dump(111 != '111').'<br>'; //false
echo '<br>';
var_dump(111 !== '111').'<br>'; //true
