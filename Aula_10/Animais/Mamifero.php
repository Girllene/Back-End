<?php
//importanto classe animais
class Mamifero extends Animais {
 // propriedades da classe adicional
 protected $qtdPatas;

 // Construtor da classe AlunoMamifero
 public function __construct($nome, $idade, $cor, $qtdPatas){

// Chama o construtor da classe pai (Animal)  
    parent::__conctruct($nome, $idade, $cor);
    
// Inicializa a propriedade específica da classe mamiferp
    $this-> qtdPatas = $qtdPatas;
 }

}

?>