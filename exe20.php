exe20.
● Crie uma variável que recebe uma velocidade de um carro
● Depois crie uma estrutura if que verifica esse velocidade;
○ Se a velocidade for menor que 40, imprima que o motorista está na
velocidade correta;
○ Se igual a 40, imprima uma mensagem para o motorista tomar
cuidado;
○ Se for maior de 40, imprima uma mensagem de multa.

<br>
<br>
<br>

<?php
$vel1 = 100;

if($vel1 < 40) {
    echo "O motorista está dentro da velocidade correta <br>";
}

else if ($vel1 == 40) {
    echo "Motorista, tome cuidado ! <br>";
}

else {
    echo "Motorista, pegue sua multa !";
}
?>