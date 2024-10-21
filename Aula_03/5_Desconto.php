<?php
// Calcular o desconto na mensalidade com base na nota do aluno 
// nota >=9 20%
// nota >=7 e 8.9 10%
// nota <7  sem desconto
// mensalidade padrão 100,00

$notaAluno = 5;
$mensalidade = 1000;

if ($notaAluno >=9) {
    echo "Desconto de 20% aplicado na mensalidade padrão. Valor a pagar R$" . ($mensalidade -($mensalidade * 0.20));
} else if($notaAluno >=7){
    echo "Desconto de 10% aplicado na mensalidade padrão. Valor a pagar R$" . ($mensalidade -($mensalidade * 0.10));
} else{
    echo "Valor da mensalidade R$ " . $mensalidade;
}
?>