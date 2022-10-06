exe.19 Crie variaveis com numeros e outras com string;
faça uma if checando se é um numero;
Caso seja, atribua a multiplicação deste numero por 2 numa variavel chamada resultado;
crie um outro if, que checa se resultado é maior que 100:
Se verdade, imprima uma mensagem de notificação informado que é maior ou igual a 100;
se falso, imprima uma mensagem de notificação informando que é inferior a 100;

<br>
<br>
<br>

<?php

$num1 = 10;
$a = "Cesar";
$resultado = 0;

if (is_numeric($num1)) {
    $resultado = $num1 * 2;

    if ($resultado >= 100) {
        echo "$resultado é maior ou igual ao numero 100 <br>";
    } else {
        echo "$resultado é um numero inferior ao numero 100 <br>";
    }
} else {
    echo "a variavel $a é uma string <br>";
}

if (is_numeric($a)) {
    $resultado = $a * 2;

    if ($resultado >= 100) {
        echo "$resultado é maior ou igual ao numero 100 <br>";
    } else {
        echo "$resultado é um numero inferior ao numero 100 <br>";
    }
} else {
    echo "a variavel $a é uma string <br>";
}

?>