<?php
// //Função sem parâmetros
// function apresentar (){
//     echo "Olá, boa noite!\n";
// }

// apresentar();
// apresentar();

//Função com parâmetro
// function apresentar ($nome){ //$nome => é um parâmetro
//     echo "Olá, $nome boa noite!\n";
// }
// $nome1 = readline ("Digite seu nome");
// // chamando -(invocando)
// apresentar($nome1); //"João" é um argumento
// apresentar("Alice");
// apresentar("Ana");
// apresentar("Pedro");

// Função com parâmetro
function apresentar ($nome, $idade, $cidade){ //$nome => é um parâmetro
    echo "Olá, $nome boa noite!. Você tem $idade anos, e mora em $cidade\n";
}
// chamando -(invocando)
apresentar("João", 23,"Rio de Janeiero"); //"João" é um argumento
apresentar("Alice", 22, "Manaus");
apresentar("Ana", 20, "São Paulo");
apresentar("Pedro", 19, "Belém");
?>
