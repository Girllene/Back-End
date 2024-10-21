<?php
// Calcular Média e Status
// o programa deve receber 3 notas de um aluno e calcular a média.

$nota1 = 5;
$nota2 = 5;
$nota3 = 5;
$media = ($nota1 + $nota2 + $nota3)/3;

if ($media >=7){
    echo "Aprovado";
} else if ($media >=5){
    echo "Recuperação";
} else{
    echo "Reprovado";
}
?>