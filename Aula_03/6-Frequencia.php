<?php
// <!-- O programa deve receber a quantidade de aulas dadas e a quantidade de faltas do aluno
// O programa deve calcular a frequência do aluno utilizando a fórmula: (número de aulas assistidas / número total de aulas) * 100.
// Para estar apto a fazer a prova final, o aluno deve ter frequentado pelo menos 75% das aulas. -->

$aulasAssistidas = 100;
$totalAulas = 200;
$frequencia = ($aulasAssistidas /$totalAulas) *100;
if ($frequencia >= 75){
    echo "Aluno apto a fazer a prova final";
} else{
    echo "Aluno não apto a prova final";
}
?>