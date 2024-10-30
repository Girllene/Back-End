<?php
class Pessoa{ 
    // Propriedade
    protected $nome;
    protected $dataDeNascimento;
    protected $disciplina;
    protected $cpf;
    protected $identificacao;

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