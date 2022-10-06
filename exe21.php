exe21.
Reescreva o exemplo acima, para que a condição de parada seja verificada na
expressão do while. Ou seja, no momento que o valor de um elemento no vetor for
menor que 0, o laço de repetição será finalizado.

<br>
<br>
<br>

<?php

$vetor = [1, 45, 55, 2, -20, 0, 11];
$contador = 0;
while ($contador < count($vetor)) {
    if ($vetor[$contador] < 0) {
        break;
    } else {
        echo "valor na posição $contador é: $vetor[$contador]<br>";
    }
    $contador++;
} //fim while

?>