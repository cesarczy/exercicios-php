8. O IMC- Índice de Massa Corporal é um critério da Organização Mundial de Saúde para
dar uma indicação sobre a condição de peso de uma pessoa adulta. A fórmula e IMC =
peso / ( altura * altura). Elabore um programa que leia o peso e a altura de um adulto e
mostre sua condição de acordo com a tabela abaixo:
Abaixo de 18,5 Abaixo do peso;
Entre 18,5 e 25 Peso normal;
Entre 25 e 30 Acima do peso;
Acima de 30 obeso.

<br>
<br>


<?php

$peso = 83;
$alt = 1.80;
$imc = $peso / ($alt * $alt);

echo "IMC atual: " . number_format($imc, 2) . "<br>";

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc < 18.5 and $imc < 25) {
    echo "Peso Normal";
} else {
    echo "Acima do peso";
}

?>
