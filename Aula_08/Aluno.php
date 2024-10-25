<?php
// Definindo a classe Aluno
class Aluno {
    // Atributos da classe
    private $nome;
    private $idade;
    private $matriculado = true;
    private $notas = [];

    // Método para definir o nome do aluno
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nomeNovo) {
        $this->nome = $nomeNovo;
    }

    public function situacao(){
        if($this->matriculado == true) {
             $this->matriculado = false;
        } else if($this->matriculado == false) {
             $this->matriculado = true;
        }

    }

}
?>