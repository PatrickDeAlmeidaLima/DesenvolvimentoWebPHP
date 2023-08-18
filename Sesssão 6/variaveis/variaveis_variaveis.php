<div class="titulo">Váriaveis Váriaveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';


echo "$a {$$a} ${$a} $valorA";

$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';

echo "<br> $epa {$$epa} {$$$epa}";