<?php

class Veiculo {
    private $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }

    public function mostrarAcao() {
        $this->Andar();
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getModelo() {
        return $this->modelo;
    }
}

class Carro extends Veiculo {
    public function ligarLimpador(){
        echo "Limpando em 321";
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Dando grau em 321";
    }
}

$carro = new Veiculo();
$carro->setModelo("Hillux");
echo $carro->getModelo();
echo "<br>";
var_dump($carro);

echo "<br>";
echo "Private só pode ser acessado do escopo da própria classe, já o protected pode ser acessado nas classes herdadas, mas não de qualquer lugar. Já o público pode ser acessado de qualquer lugar";

?>