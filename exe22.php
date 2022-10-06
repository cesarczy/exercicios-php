exe22.
Crie um array com pelo menos 10 itens, de tipo de dados diferentes e faça um laço
de repetição utilizando while para exibir apenas os dados que são strings.
Dica: use a função is_string($variavel) para saber se o conteúdo de $variavel é
uma string.


<br>
<br>
<br>

<?php

$vetor = ["Patricia", 1, 45, 55, "Bia", 2, -20, 0, 11, "Cesar", "Ana", 33];
$contador = 0;
while ($contador < count($vetor)) {
    if (is_string($vetor[$contador])) {
        echo "valor na posição $contador é: $vetor[$contador]<br>";
    }
    $contador++;
} //fim while

?>