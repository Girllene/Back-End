<?php
// Solicitar ao usuário o numero total de aulas ministradas.
// Pedir ao usuário para inserir a quantidade de aulas frenquentadas por 5 alunos.
// Armazenar o percentual de frequencia de cada aluno em um array.
// Exibir o percentual de frequencia de cada aluno na tela.

$frequencia = []; 
$totalAulas = readline("Digite o número total de aulas ministradas: ");
for ($i = 1; $i <= 5; $i++) { 
    $aulasFrequentadas = readline("Digite o número de aulas frequentadas pelo aluno $i: ");
    $percentualFrequencia = ($aulasFrequentadas / $totalAulas) * 100;
    $frequencia[$i] = $percentualFrequencia;
}
echo "Percentual de frequência dos alunos: \n";
for ($i = 1; $i <= 5; $i++){
    echo "Aluno $i: ". $frequencia[$i] . "%\n";
}

?>