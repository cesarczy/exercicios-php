7. Escreva um programa em php que leia três valores inteiros e diferentes e mostre-os em
ordem decrescente.
<br>
<br>

<?php

$num[0] = 22;
$num[1] = 33;
$num[2] = 11;

// ordem digitados
echo "Numero digitados: <br>";
for ($i = 0; $i < count($num); $i++)
    echo $num[$i] . "<br>";

echo "<hr>";

// ordena em ordem decrescente
rsort($num);
echo "Numeros em ordem decrescente: <br>";
for ($i = 0; $i < count($num); $i++)
    echo $num[$i] . "<br>";
?>