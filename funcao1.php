<?php

function soma ($a, $b) {
    $resultado = $a + $b;
    return $resultado;
}

function sub ($a, $b) {
    $resultado = $a - $b;
    return $resultado;
}

function div ($a, $b) {
    $resultado = $a / $b;
    return $resultado;
}

function mult ($a, $b) {
    $resultado = $a * $b;
    return $resultado;
}

function calc ($x, $y) {
    $resultSoma = soma($x, $y);
    $resultSub = sub($x, $y);
    $resultMult = mult($x, $y);
    $resultDiv  = div($x, $y);
    echo "A soma é igual a: $resultSoma<br> A subtração é igual a: $resultSub<br> A multiplicação é igual a: $resultMult<br> A divisão é igual a: $resultDiv";

}

calc (1,2);


?>