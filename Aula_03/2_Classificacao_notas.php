<?php
// Classificação de Notas
// criar um programa que recebe a nota do aluno e verifica se ele foi aprovado ou reprovado, considerando a nota 9 ou mais para "aprovado com distinção", entre 6 e 8.9: "Aprovado" e menos que 6: "Reprovado.

$notaAluno = 10;
if($notaAluno >=9){
    echo "Aluno Aprovado com distinção!";
} else if($notaAluno >= 6){
    echo "Aluno Aprovado.";
}
else{
    echo "Reprovado";
}
?>