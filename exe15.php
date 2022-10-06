exe15. Faça as seguintes verificações em estruturas if:

*5 é maior que 2 ?
Matheus é diferente de Pedro ?
12 é menor ou igual a 11 ?
Você deve inserir os valores em variaveis;
<br>
<br>

<?php

$num1 = 5;
$num2 = 2;
$num3 = 11;
$num4 = 14;
$a = "Matheus";
$b = "Pedro";


if ($num1 > $num2) {
    echo "$num1 é maior que $num2 - condição verdadeira<br>";
} else {
    echo "condição falsa<br>";
}

if ($a != $b) {
    echo "$a é diferente de $b - Condição verdadeira<br>";
} else {
    echo "Condição falsa<br>";
}

if ($num3 <= $num4) {
    echo "$num3 é menor ou igual a $num4 - condição verdade<br>";
} else {
    echo "condição falsa<br>";
}
?>