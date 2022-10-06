9. Escreva um programa em php que calcule o que deve ser pago por um produto,
considerando o preço normal de etiqueta e a escolha da condição de pagamento. Utilize os
códigos da tabela a seguir para ler qual a condição de pagamento escolhida e efetuar o
cálculo adequado:
A vista em dinheiro ou cheque, recebe 10% de desconto;
A vista no cartão de crédito, recebe 15% de desconto;
Em duas vezes, preço normal de etiqueta sem juros;
Em duas vezes, preço normal de etiqueta mais juros de 10%.

<br>
<br>

<?php
$preçoAtual = 3.50;
$pagAvista = $preçoAtual - ($preçoAtual * 0.1);
$pagCred = $preçoAtual + ($preçoAtual * 0.15);
$tipoPagamento = "credito";

if ($tipoPagamento == "dinheiro" or $tipoPagamento == "cheque") {
    echo "O valor total da sua compra com desconto de 15% é de: " . number_format($pagAvista, 2);
} else {
    echo "O valor total da sua compra com desconto de 10% é de: " . number_format($pagCred, 2);
}


?>
