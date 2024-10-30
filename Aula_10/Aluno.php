<?php
//importanto classe pessoa
class Aluno extends Pessoa {
 // propriedades da classe aluno
 private $notas = [];
 private $rg;
 
    // Construtor da classe Aluno
 public function __construct($nome, $dataDeNascimento, $disciplina, $rg){
    parent::__conctruct($nome, $dataDeNascimento, $disciplina, $rg);
    // Inicializa a propriedade específica da classe Aluno
    $this-> rg = $rg;
 }

}

?>