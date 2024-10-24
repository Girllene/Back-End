<?php
// Criar um programa que faça a leitura do nome e de duas notas de uma quantidade de alunos. O programa deve calcular a média dde cada aluno e armazenar os resultados em um boletim. 
$numeroAlunos = 3; // quantidade de alunos
$boletim = []; //vai iniciar um array, a principio zerado

for ($i = 1; $i <= $numeroAlunos; $i++){ //$i é o contador
    $nome = readline ("Digite o nome do aluno $i: ");
    $nota1 =  readline ("Digite a primeira nota: ");
    $nota2 =  readline ("Digite a segunda nota: ");
    $media = ($nota1 + $nota2)/2;

    $boletim [$nome] = $media;
}
echo "Boletim Escolar \n";
foreach($boletim as $aluno => $media){
    echo "$aluno - Média: $media\n";
}

echo "Resultados Finais: \n";
foreach($boletim as $aluno => $media){
    if ($media>= 6){
        echo "$aluno foi APROVADO com média $media. \n";
    }else
    echo "$aluno foi REPROVADO com média $media. \n";
}
?>

