<div class="titulo"> Boleano</div>

<?php

echo true, '<br>';
echo FALSE, '<br>';


echo var_dump(True) . '<br>';
echo var_dump(FALSE) . '<br>';
echo var_dump('false') . '<br>';
echo is_bool(false) . '<br>';
echo is_bool('false') . '<br>';

// fazer as regras de conversões
echo '<p>Regras: </p>' . '<br>';
echo var_dump((bool)0) . '<br>'; //apenas zero é false
echo var_dump((bool)1) . '<br>';
echo var_dump((bool)5) . '<br>';
echo var_dump((float)1) . '<br>';
echo var_dump((bool) -1) . '<br>';
echo var_dump((bool) 0.0) . '<br>';
echo var_dump((bool) 0.00000000000001) . '<br>';
echo var_dump((bool) "") . '<br>';
echo var_dump((bool) " ") . '<br>';
