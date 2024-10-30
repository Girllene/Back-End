<?php
class Animal{ 
    // Propriedade
    protected $nome;
    protected $idade;
    protected $cor;
    
     // Construtor
    public function __construct ($nome, $idade, $cor){
        $this-> nome = $nome;
        $this-> idade = $idade;
        $this-> cor = $cor;
        
    }
    //Método
    public function comunicar(){
        echo "Fazendo barulho";
        
    }
}
?>