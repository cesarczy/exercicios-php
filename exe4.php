4. Faça um programa em php que leia dois valores inteiros A e B se os valores forem iguais
deverá se somar os dois, caso contrário multiplique A por B. Ao final de qualquer um dos
cálculos deve-se atribuir o resultado para uma variável C e mostrar seu conteúdo na tela.

<br>
<br>

<?php

$valA = 2;
$valB = 2;
$valC = "";

if ($valA == $valB) {
    $valC = $valA + $valB;
    echo "A soma de $valA + $valB é igual a: $valC";
} else{
    $valC = $valA * $valB;
    echo "A multiplicação de $valA * $valB é igual a: $valC";
}

?>