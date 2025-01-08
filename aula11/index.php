<?php
require 'classes/produto.php';
require 'models/produto.php';

use models\Produto as productModel;
use classes\Produto as productClasses;

$produto1 = new productClasses();
$produto2 = new productModel();
$produto1->mostrarDetalhes();
echo"<br>";
$produto2->mostrarDetalhes();