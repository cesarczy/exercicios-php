exe11. Faça um algoritmo em PHP onde verifica-se que o valor da variável A é maior ou menor que o valor da variável B. 
A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.

<br>
<br>
<br>
<br>

<?php
$valA = 1;
$valB = 1;

if ($valA == $valB) {
    echo "Esses valores são iguais.";
} elseif ($valA < $valB) {
    echo "A menor que B!";
} else {
    echo "A maior que B!";
}
?>
