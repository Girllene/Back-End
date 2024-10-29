<?php
class Pessoa{ 
    // Propriedade
    private $nome;
    private $dataDeNascimento;
    private $disciplina;
    private $cpf;
    private $identificacao;

     // Construtor
    public function __construct ($nome, $dataDeNascimento, $disciplina,
     $cpf, $identificacao){
        $this-> nome = $nome;
        $this-> dataDeNascimento = $dataDeNascimento;
        $this-> disciplina = $disciplina;
        $this-> cpf = $disciplina;
        $this-> identificacao = $identificacao;

    }
    //Método
    public function exibirInfo(){
        echo "Nome:  $nome \n";
        echo "CPF:  $cpf \n";
    }
}
?>