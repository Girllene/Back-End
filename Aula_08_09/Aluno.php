<?php
// Definindo a classe Aluno
class Aluno {
    // Atributos da classe
    private $nome;
    private $idade;
    private $matriculado = true;
    private $notas = [];

    public function __construct ($nome, $idade){
        $this ->nome = $nome;
        $this ->idade = $idade;
    }

    // Método para definir o nome do aluno
    public function getNome() {
        return $this->nome;
    }
 // Método para definir o nome do aluno
    public function setNome($nome) {
        $this->Nome = $nome;
    }
    // Método para obter a idade do aluno
    public function getIdade() {
        return $this->idade;
    }
// Método para obter a idade do aluno
    public function setIdade($idade) {
        $this->idade = $idade;
    }
 // Método para alternar a situação de matrícula
    public function situacao(){
        if($this->matriculado == true) {
             $this->matriculado = false;
        } else if($this->matriculado == false) {
             $this->matriculado = true;
    }
    }
     // Método para exibir os dados do aluno
    public function exibirDados(){
        echo "Nome: $this->nome\n";
        echo "Idade: $this->idade\n";
        echo "Situação: $this->matriculado\n";

    }
}
// Criando instâncias da classe Aluno
$aluno1 = new Aluno("Ana", 15);
$aluno2 = new Aluno("Carlos", 17);
$aluno3 = new Aluno("Lucas", 16);
$aluno3 -> setIdade (15);

// Exibindo as informações dos alunos
$aluno1 ->exibirDados();
$aluno2 ->exibirDados();

$aluno3->situacao();
$aluno3 ->exibirDados();
?>
