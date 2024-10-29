<?php
class Professor {
    
    private $nome;
    private $cpf;
    private $disciplina;
    private $identificacao = [];

    public function getDisciplina(){
        return $this ->disciplina;
    }
    public function getNome(){
        return $this ->nome;
    }
    public function setDisciplina($disciplinaNovo){
        $this ->nome = $disciplinaNovo;
    }
    public function setNome($nomeNovo){
        $this ->nome = $nomeNovo;
    }
    public function setCpf($cpfNovo){
        $this ->nome = $cpfNovo;
    }
}

?>