<?php
// O programa deve receber a idade do aluno e classificá-lo em uma das faixas etárias correspondentes.
// até 5 anos - Educação infantil
// 6 a 10 anos - Ensino Fundamental I
// 11 a 14 anos - Ensino Fundamental II
// 15 a 17 anos - Ensino Médio
// acima  de 17 anos - Eja

$idadeAluno = 7;
if ($idadeAluno <= 5 ){
    echo "Educação Infantil";
} else if ($idadeAluno <= 10){
    echo "Educação Fundamental I";
} else if ($idadeAluno <= 14){
    echo "Educação Fundamental I";
} else if ($idadeAluno <= 17){
    echo "Ensino Médio";
} else {
    echo "EJA - Educação de Jovens e Adultos";
}

?>