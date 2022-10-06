exe10. Crie um algoritmo que leia um número e verifique se esse valor é positivo, 
negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".

<br>
<br>
<br>
<br>


<?php
$num = 0;

if ($num == 0) {
    echo "Igual a zero!";
} elseif ($num < 0) {
    echo "Negativo!";
} else {
    echo "Positivo!";
}
?>