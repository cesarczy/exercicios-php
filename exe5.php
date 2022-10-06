5. Encontrar o dobro de um número caso ele seja positivo e o seu triplo caso seja negativo,
imprimindo o resultado.

<br>
<br>


<?php

$num = 0;
$result = "";

if ($num > 0) {
    $result = $num * 2;
    echo "$Esse é um numero positivo. Então, o dobro do numero $num é igual a: $result";
} elseif ($num < 0) {
    $result = $num * 3;
    echo "Esse é um numero negativo. Então, o dobro do numero $num é igual a: $result";
} else {
    echo "Esse numero é $num";
}


?>