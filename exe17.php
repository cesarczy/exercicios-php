exe17. Crie 3 variaveis com tipos de dados diferentes: string, int e boolean;
cheque se a variável é um inteiro;
*Caso verdade, apresente a mensagem confirmando;
*Caso falso, apresente uma mensagem informando quea variavel não é um inteiro.



<br>
<br>
<br>

<?php

$a="Cesar Siqueira";
$b=10;
$c=TRUE;

if(is_int($a)) {
    echo "$a é um numero inteiro <br>";
} else {
    echo "$a não é um numero inteiro <br>";
}

if(is_int($b)) {
    echo "$b é um numero inteiro <br>";
} else {
    echo "$b não é um numero inteiro <br>";
}

if(is_int($c)) {
    echo "$c é um numero inteiro <br>";
} else {
    echo "$c não é um numero inteiro <br>";
}

?>