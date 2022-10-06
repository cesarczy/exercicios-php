exe14. Faça um cadastro de aluno utilizando array associativo com as seguintes
informações de aluno:
● Nome completo;
● Matrícula;
● CPF;
● Endereço;
● Semestre;
● Data de nascimento.
As informações devem ser formatadas conforme o exemplo 13.


<br>
<br>
<br>
<br>


<?php
$a=['nome'=> 'Cesar', 'matricula' => '123', 'cpf'=>'025.588.891-09', 'end' => 'Rua 21 casa 05', 
'sem' => '2º semestre', 'nasc' => '09/03/1989'];
echo "Nome completo: ". $a['nome']."<br>";
echo "Numero de matricula: ". $a['matricula']."<br>";
echo "Data de nascimento: ".$a['nasc']."<br>";
echo "Numero do CPF: ".$a['cpf']."<br>";
echo "Seu endereço: ".$a['end']."<br>";
echo "Semestre atual: ".$a['sem']."<br>";
?>
