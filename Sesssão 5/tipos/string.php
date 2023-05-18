<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// Concatenação

echo "Nos também" . ' somos', '<br>';
echo ("Número é " . 132);
echo '<br>', "Também aceito", " virgulas";
echo '<br>';

echo "'Teste'" . '"Teste"' . '\'Teste\'' . "\"Teste\"" . "\\";

print("<br>Também existe um função print");
print "<br>Também existe um função print sem parenteses";

// Algumas funções 
echo '<br>' . strtoupper('maximilizado');
echo '<br>' . strtolower('MINIMILIZADO');
echo '<br>' . ucfirst('primeira letra');
echo '<br>' . ucwords('as primeiras letras');
echo '<br>' . strlen('Contando todas essas palavras');
echo '<br>' . strlen('Contando todas essas palavras');
echo '<br>' . mb_strlen('Desconsiderando acentos também', 'utf-8');
echo '<br>' . substr('Só uma parte mesmo', 7, 6);
echo '<br>' . substr('Só uma parte mesmo', 7);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');
