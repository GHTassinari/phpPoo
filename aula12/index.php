<?php

class Pessoa {
    public $idade;

    // Esse método vai ser utilizado quando se utilizar a palavra clone, portanto no echo vai estar "Clonagem de objetos 35"
    public function __clone(){
        echo "Clonagem de objetos ";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;

$pessoa2->idade = 35;

echo $pessoa->idade; //Caso não use o clone, ele iria mudar o valor da variável $pessoa, pois $pessoa2 seria referência à $pessoa. 
// O clone faz com que ele se torne um clone do objeto, e altere somente o clone, não a referência
// E não apenas uma referência