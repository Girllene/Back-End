<?php
// Solicitar ao usuário o numero total de aulas ministradas.
// Pedir ao usuário para inserir a quantidade de aulas frenquentadas por 5 alunos.
// Armazenar o percentual de frequencia de cada aluno em um array.
// Exibir o percentual de frequencia de cada aluno na tela.

$numeroAlunos = 5; 
$frequencia = []; 
$totalAulas = readline("Digite o número total de aulas ministradas: ");
//loop para solicitar o numero de aluas frequentadas por 5 alunos
for ($i = 1; $i <= $numeroAlunos; $i++) { 
    $aulasFrequentadas = readline("Digite o número de aulas frequentadas pelo aluno $i: ");
//calcular o percentual de frequencia
    $percentualFrequencia = ($aulasFrequentadas / $totalAulas) * 100;
// adicionar o percentual em uma array
    $frequencia[] = $percentualFrequencia;
}
//loop para contar 5 alunos com a impressão da array
foreach($frequencia as $aluno => $percentualFrequencia){
    echo "Aluno " . ($aluno + 1) . ": " .($percentualFrequencia) . "% de frequencia\n";
}


?>

