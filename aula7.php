<?php

class Pessoa {
    const nome = "Guilherme";

    public function exibirNome(){
        echo self::nome;
    }
}

class Guilherme extends Pessoa {
    const nome = "Tassinari";

    public function exibirNome(){
        echo parent::nome; //Refere-se a declaração feita no escopo da clase.
    }
}

$guilherme = new Guilherme();
$guilherme->exibirNome();