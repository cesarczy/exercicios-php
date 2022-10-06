6. Faça um programa em php que leia uma variável e some 5 caso seja par ou some 8 caso
seja ímpar, imprimir o resultado desta operação.

<br>
<br>

<?php

$num = 5;
$result = "";

if ($num % 2 == 0) {
    $result = $num + 5;
    echo "$num é um numero par, então, $num + 5: $result";
} else {
    $result = $num + 8;
    echo "$num é um numero ímpar, então, $num + 8: $result";
}


?>