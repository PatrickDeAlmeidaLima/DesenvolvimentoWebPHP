<div class="titulo"> Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, qual o método
// que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1?


echo '<br>' . substr('!AbcaBcabc', 1, 3);
echo '<br>' . strpos('!AbcaBcabc', 'abc');
echo '<br>' . stripos('!AbcaBcabc', 'abc');
echo '<br>' . stripos(strtolower('!AbcaBcabc'), 'abc');
echo '<br>' . stripos(strtolower('!AbcaBcabc'), strtolower('ABC'));
