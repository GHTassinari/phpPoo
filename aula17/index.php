<?php 
// Invoke
// ToString
// Get
// Set

class Pessoa {
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome) {
        return $this->dados[$nome];
    }

    public function __tostring(){
        return "Tentei imprimir o objeto pessoa";
    }

    public function __invoke(){
        return "Objeto com função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Guilherme";
$pessoa->idade = 21;
$pessoa->sexo = "M";

echo $pessoa();
