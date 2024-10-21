<?php
// Tipo de dados em variáveis
$nome = "Maria"; // string
$idade = 18; //number, inteiro, número não precisa de aspas
$altura = 1.62; // float, numero decimal
$matriculado = true; // bollean, só poder true ou false
$materias = array ("Matemática", "História", "Física"); //array, tipo uma lista

//echo "\n Nome: " . $nome; 
//echo "\n Idade: " . $idade . "anos";
//echo "\n Altura: " . $altura . "m";
//echo "\n Matriculado: " . ($matriculado ? "Sim": "Não");
//echo "\n Matérias: " . implode(", ",$materias);


//Estruturais condicionais - if, else if, else
//Se a nota for a partir de 6, ele passou de série
//$notaFinal = 4;
//if ($notaFinal >=6) {
// //    echo "Aluno Aprovado!";
// }
// else if ($notaFinal <6) {
//     echo "Aluno Reprovado";
// }
// else{
//     echo "Nota inválida!";
// }
// >= - Maior e igual
// <= - menor e igual
// > - Maior
// < - Menor
// == - igual
// != - Diferente

//Operadores Lógicos
// and(e) - && - true e true = true
// or(ou) - || - true e false - true
//Para a aluna ser aprovada, precisa que a notal final seja a partir de 60 e que a frequencia seja a aprtir de 75%.
// $notaAlunaFinal = 70;
// $frequenciaAluna = 85; //percentual de presença
// if($notaAlunaFinal >=60 && $frequenciaAluna >= 75)
//  {echo "Aluna Aprovada";
// // }
//     else {
//         echo "Aluna Reprovada";
//     }

//Para a aluna ser aprovada, precisa que a notal final seja a partir de 60 e que a frequencia seja a aprtir de 75%.
$notaAlunaFinal = 50;
$frequenciaAluna = 45; //percentual de presença
if($notaAlunaFinal >= 60|| $frequenciaAluna >= 75){
    echo "Aluna Aprovada"; 
}
else{
    echo "Aluna Reprovada"; 
}





?>
