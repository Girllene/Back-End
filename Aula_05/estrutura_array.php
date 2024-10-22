<?php
// Array é uma coleção ordenada de elementos. Cada elemento pode ser acessado pelo índice. Arryays são usados para armazenar listas de itens, como de alunos ou notas, etc.

// $alunos = ["Ana", "Bruno", "Carlos", "Daniela"];
// echo "Primeiro Aluno: " . $alunos[0]  . "\n";
// echo "Último Aluno: " . $alunos[3];

$notasMatematica = [
    "Ana" => 8.5, 
    "Bruno" =>7.5, 
    "Carlos"=> 9.0,
    "Daniela" => 6.0
];
echo "Nota do Bruno: " . $notasMatematica["Bruno"];

?> 