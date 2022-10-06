# exercicios-php
Exercícios básicos de PHP

exe1. Faça um programa em PHP que leia os valores A, B, C e imprima na tela se a soma de A + B e menor que C.

exe2. Faça um programa em PHP que leia o nome, o sexo e o estado civil de uma pessoa. Caso sexo seja "F" e estado civil seja "CASADA", solicitar o tempo de casada (anos).

exe3. Faça um programa para receber um número qualquer e informar na tela se é par ou ímpar.

exe4. Faça um programa em PHP que leia dois valores inteiros A e B se os valores forem iguais deverá se somar os dois, caso contrário multiplique A por B. Ao final de qualquer um dos cálculos deve-se atribuir o resultado para uma variável C e mostrar seu conteúdo na tela.

exe5. Encontrar o dobro de um número caso ele seja positivo e o seu triplo caso seja negativo, imprimindo o resultado.

exe6. Faça um programa em PHP que leia uma variável e some 5 casos seja par ou some 8 casos seja ímpar, imprimir o resultado desta operação.

exe7. Escreva um programa em PHP que leia três valores inteiros e diferentes e mostre-os em ordem decrescente.

exe8. O IMC- Índice de Massa Corporal é um critério da Organização Mundial de Saúde para dar uma indicação sobre a condição de peso de uma pessoa adulta. A fórmula e IMC = peso / (altura * altura). Elabore um programa que leia o peso e a altura de um adulto e mostre sua condição de acordo com a tabela abaixo:
Abaixo de 18,5 Abaixo do peso;
Entre 18,5 e 25 Peso normal;
Entre 25 e 30 Acima do peso;
Acima de 30 obeso.

exe9. Escreva um programa em PHP que calcule o que deve ser pago por um produto, considerando o preço normal de etiqueta e a escolha da condição de pagamento. Utilize os
códigos da tabela a seguir para ler qual a condição de pagamento escolhida e efetuar o cálculo adequado:
A vista em dinheiro ou cheque, recebe 10% de desconto;
A vista no cartão de crédito, recebe 15% de desconto;
Em duas vezes, preço normal de etiqueta sem juros;
Em duas vezes, preço normal de etiqueta mais juros de 10%.

exe10. Crie um algoritmo que leia um número e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".

exe11. Faça um algoritmo em PHP onde verifica-se que o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.

exe12. Faça um algoritmo em PHP que dados dois valores A e B, apresente o resultado das 4 operações básicas da matemática: 
soma, subtração, divisão e multiplicação.

exe13. Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado. A média de de val1, val2 e val3, é a soma das três variáveis dividido pela quantidade que aqui é 3.

exe14. Faça um cadastro de aluno utilizando array associativo com as seguintes informações de aluno:
● Nome completo;
● Matrícula;
● CPF;
● Endereço;
● Semestre;
● Data de nascimento.
As informações devem ser formatadas conforme o exemplo 13.

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
