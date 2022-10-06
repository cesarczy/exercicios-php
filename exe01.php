1. Faça um programa em php que leia os valores A, B, C e imprima na tela se a soma de A
+ B e menor que C.

<br>
<br>

<?php
$valA = 1;
$valB = 2;
$valAB = $valA + $valB;
$valC = 4;

if ($valAB == $valC) {
    echo "Esses valores são iguais.";
} elseif ($valAB < $valC) {
    echo "A soma dos valores A e B é menor que C!";
} else {
    echo "A soma de A e B é maior que C!";
}
?>
