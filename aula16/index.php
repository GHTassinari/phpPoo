<?php

class Pessoa {
    public function atribuiNome($nome){
        return "O nome nome da pessoa é: " . $nome;
    }
}

class Exibe {
    public $pessoa; // Cria uma instância de uma classe dentro de si própria
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Guilherme");
$exibe->exibeNome();

?>